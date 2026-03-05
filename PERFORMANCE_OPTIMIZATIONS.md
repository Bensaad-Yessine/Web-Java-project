# Performance Optimizations Guide

## Applied Optimizations

I've implemented several performance optimizations to make your Symfony application faster and more efficient:

### 1. **Doctrine ORM Optimizations**

#### Database Connection Pooling
- Enabled PDO persistent connections for better connection reuse
- Reduces overhead of creating new database connections on each request

#### Caching Configuration
- **Metadata Cache**: Caches entity metadata to avoid parsing annotations/attributes on every request
- **Query Cache**: Caches DQL queries parsing results
- **Result Cache**: Caches query results for frequently accessed data (production only)

Location: `config/packages/doctrine.yaml`

### 2. **Application-Level Caching**

#### APCu Implementation
- Configured APCu (Alternative PHP Cache - User) for in-memory caching
- Much faster than filesystem-based caching
- Custom cache pools for different use cases:
  - `app.cache`: General application data (1 hour TTL)
  - `api.cache`: API responses (10 minutes TTL)

Location: `config/packages/cache.yaml`

**Note**: For production with multiple servers, consider using Redis instead of APCu. Configuration example included in the cache.yaml file.

### 3. **Framework Optimizations**

#### HTTP Cache & ESI
- Enabled HTTP cache for better response caching
- Enabled ESI (Edge Side Includes) for fragment caching
- Allows caching parts of pages independently

#### Serializer & Property Info
- Enabled property info cache for faster object serialization
- Improves API response times

Location: `config/packages/framework.yaml`

### 4. **Twig Template Optimizations**

#### Production Optimizations
- Disabled auto-reload in production (templates won't be recompiled on each request)
- Maximum optimization level (-1) for compiled templates
- Templates are cached and never checked for changes in production

Location: `config/packages/twig.yaml`

### 5. **Repository Query Optimizations**

#### Eager Loading
Added optimized repository methods to prevent N+1 query problems:

- `UserRepository::findAllOptimized()`: Loads users with their classe, taches, and objectifs in one query
- `UserRepository::findByClasseOptimized()`: Loads users by class with relationships
- `GroupeProjetRepository::findAllOptimized()`: Loads groups with all related data
- `GroupeProjetRepository::findByMember()`: Enhanced with eager loading

**N+1 Query Problem Example**:
```php
// BAD - Generates 1 + N queries
$users = $userRepository->findAll(); // 1 query
foreach ($users as $user) {
    $user->getClasse()->getNom(); // N queries (1 per user)
}

// GOOD - Generates 1 query
$users = $userRepository->findAllOptimized(); // 1 query with JOIN
foreach ($users as $user) {
    $user->getClasse()->getNom(); // No additional query
}
```

## Next Steps for Maximum Performance

### 1. **Install and Enable PHP OPcache**

OPcache stores precompiled PHP bytecode in memory, eliminating the need to parse and compile PHP files on every request.

**For PHP 8.1+ (already installed, just needs configuration)**:

Edit your `php.ini` file:
```ini
[opcache]
opcache.enable=1
opcache.memory_consumption=256
opcache.interned_strings_buffer=16
opcache.max_accelerated_files=20000
opcache.validate_timestamps=0
opcache.save_comments=1
opcache.fast_shutdown=1
```

**Find your php.ini location**:
```bash
php --ini
```

### 2. **Install APCu Extension**

APCu provides in-memory caching for user data:

**Windows**:
1. Download the APCu DLL from https://pecl.php.net/package/APCu
2. Place it in your PHP extensions directory
3. Add to php.ini:
```ini
extension=apcu
apc.enabled=1
apc.shm_size=64M
apc.ttl=7200
apc.enable_cli=1
```

**Linux/Mac**:
```bash
pecl install apcu
```

Then add to php.ini:
```ini
extension=apcu.so
apc.enabled=1
apc.shm_size=64M
```

### 3. **Production Deployment Steps**

**Clear and warm up cache**:
```bash
# Clear all caches
php bin/console cache:clear --env=prod --no-debug

# Warm up the cache (pre-generates cache)
php bin/console cache:warmup --env=prod --no-debug
```

**Optimize Composer Autoloader**:
```bash
composer install --no-dev --optimize-autoloader --apcu-autoloader
```

This generates a class map for faster autoloading and uses APCu for caching.

### 4. **Database Optimizations**

#### Add Indexes
Review your entities and add indexes for frequently queried fields:

```php
#[ORM\Index(name: "idx_email", columns: ["email"])]
#[ORM\Index(name: "idx_classe", columns: ["classe_id"])]
```

#### Connection Pooling
Consider using PgBouncer for PostgreSQL connection pooling if you have high traffic.

### 5. **Asset Optimization**

#### Enable Asset Versioning
In `config/packages/framework.yaml`, add:
```yaml
framework:
    assets:
        version_strategy: 'Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy'
        version_format: '%%s?v=%%s'
```

This enables browser caching of static assets.

#### Minify Assets
Consider using Webpack Encore or similar tools to:
- Minify JavaScript and CSS
- Combine multiple files
- Optimize images

### 6. **Redis for Production (Recommended)**

For production environments, especially with multiple servers, use Redis:

**Docker Compose** (`compose.yaml`):
```yaml
services:
  redis:
    image: redis:7-alpine
    ports:
      - "6379:6379"
```

**Environment variable** (`.env.prod`):
```env
REDIS_URL=redis://localhost:6379
```

**Cache configuration** (`config/packages/cache.yaml`):
```yaml
when@prod:
    framework:
        cache:
            app: cache.adapter.redis
            default_redis_provider: '%env(REDIS_URL)%'
```

### 7. **Monitoring & Profiling**

#### Enable Symfony Profiler (Development Only)
The web profiler is already installed. Use it to identify slow queries and bottlenecks:
- Visit `/_profiler` after any page load
- Check the Doctrine panel for query counts and slow queries
- Check the Time panel for slow operations

#### Production Monitoring
Consider tools like:
- **Blackfire.io**: PHP profiling and monitoring
- **New Relic**: Application performance monitoring
- **Datadog**: Infrastructure and application monitoring

### 8. **HTTP/2 and CDN**

- Use HTTP/2 on your web server (Nginx/Apache)
- Consider using a CDN (Cloudflare, CloudFront) for static assets
- Enable GZIP/Brotli compression

### 9. **Use the Optimized Repository Methods**

Update your controllers to use the new optimized methods:

**Before**:
```php
#[Route('/user', name: 'app_user_index')]
public function index(UserRepository $userRepository): Response
{
    return $this->render('user/index.html.twig', [
        'users' => $userRepository->findAll(), // Can cause N+1 queries
    ]);
}
```

**After**:
```php
#[Route('/user', name: 'app_user_index')]
public function index(UserRepository $userRepository): Response
{
    return $this->render('user/index.html.twig', [
        'users' => $userRepository->findAllOptimized(), // Optimized with eager loading
    ]);
}
```

### 10. **Additional Controller Optimizations**

Consider adding these patterns to your controllers:

#### Result Caching for Expensive Queries
```php
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

public function expensiveOperation(CacheInterface $cache): Response
{
    $data = $cache->get('expensive_key', function (ItemInterface $item) {
        $item->expiresAfter(3600); // Cache for 1 hour
        
        // Your expensive operation here
        return $this->performExpensiveCalculation();
    });
    
    return $this->render('template.html.twig', ['data' => $data]);
}
```

#### HTTP Cache Headers
```php
#[Route('/public-page')]
public function publicPage(): Response
{
    $response = $this->render('public_page.html.twig');
    
    // Cache for 1 hour
    $response->setSharedMaxAge(3600);
    $response->headers->addCacheControlDirective('must-revalidate', true);
    
    return $response;
}
```

## Performance Checklist

- [x] Enable Doctrine query and result caching
- [x] Configure APCu for application caching
- [x] Enable HTTP cache and ESI
- [x] Optimize Twig template compilation
- [x] Add eager loading to prevent N+1 queries
- [ ] Install and configure PHP OPcache
- [ ] Install APCu PHP extension
- [ ] Add database indexes on frequently queried columns
- [ ] Optimize Composer autoloader with `--optimize-autoloader --apcu-autoloader`
- [ ] Deploy with production environment (`APP_ENV=prod`)
- [ ] Set up Redis for production (if using multiple servers)
- [ ] Enable HTTP/2 on web server
- [ ] Implement CDN for static assets
- [ ] Add monitoring tools (Blackfire, New Relic, etc.)
- [ ] Update controllers to use optimized repository methods

## Expected Performance Improvements

With these optimizations, you should see:

- **30-50% faster page load times** (with OPcache enabled)
- **Reduced database queries** (N+1 problems eliminated)
- **Better scalability** (caching reduces database load)
- **Faster API responses** (result caching and serialization optimization)
- **Lower server resource usage** (memory and CPU)

## Testing Performance

### Before and After Comparison

1. **Use Apache Bench** for load testing:
```bash
ab -n 1000 -c 10 http://localhost:8000/
```

2. **Check with Symfony Profiler**:
- Number of database queries
- Total execution time
- Memory usage

3. **Use Blackfire.io** for detailed profiling

## Troubleshooting

### If caching causes issues:

**Clear the cache**:
```bash
php bin/console cache:clear
```

**Disable APCu temporarily** (in `cache.yaml`):
```yaml
framework:
    cache:
        app: cache.adapter.filesystem
```

### If you see stale data:

Check your cache TTL settings and consider reducing them or adding cache invalidation logic when data changes.

### If you get "Class not found" errors:

Rebuild the autoloader:
```bash
composer dump-autoload --optimize
```

## Additional Resources

- [Symfony Performance Best Practices](https://symfony.com/doc/current/performance.html)
- [Doctrine Performance Optimization](https://www.doctrine-project.org/projects/doctrine-orm/en/latest/reference/improving-performance.html)
- [PHP OPcache Documentation](https://www.php.net/manual/en/book.opcache.php)
- [APCu Documentation](https://www.php.net/manual/en/book.apcu.php)

---

**Remember**: Always test in a staging environment before deploying optimizations to production!
