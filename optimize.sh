#!/usr/bin/env bash
# Performance Optimization Script for Symfony Application
# This script helps automate common performance optimization tasks

set -e

echo "==================================="
echo "Symfony Performance Optimization"
echo "==================================="
echo ""

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Check if we're in production
if [ "$APP_ENV" == "prod" ]; then
    echo -e "${GREEN}Running in PRODUCTION mode${NC}"
    ENV="prod"
else
    echo -e "${YELLOW}Running in DEVELOPMENT mode${NC}"
    ENV="dev"
fi

echo ""

# Function to check if a command exists
command_exists() {
    command -v "$1" >/dev/null 2>&1
}

# Check PHP OPcache
echo "Checking PHP OPcache..."
if php -i | grep -q "opcache.enable => On"; then
    echo -e "${GREEN}✓ OPcache is enabled${NC}"
else
    echo -e "${RED}✗ OPcache is NOT enabled${NC}"
    echo "  Enable OPcache in php.ini for better performance"
fi

# Check APCu
echo "Checking APCu..."
if php -m | grep -q "apcu"; then
    echo -e "${GREEN}✓ APCu extension is installed${NC}"
else
    echo -e "${RED}✗ APCu extension is NOT installed${NC}"
    echo "  Install APCu for better caching performance"
fi

echo ""
echo "==================================="
echo "Step 1: Clearing Cache"
echo "==================================="
php bin/console cache:clear --env=$ENV --no-debug
echo -e "${GREEN}✓ Cache cleared${NC}"

echo ""
echo "==================================="
echo "Step 2: Warming Up Cache"
echo "==================================="
php bin/console cache:warmup --env=$ENV --no-debug
echo -e "${GREEN}✓ Cache warmed up${NC}"

if [ "$ENV" == "prod" ]; then
    echo ""
    echo "==================================="
    echo "Step 3: Optimizing Autoloader"
    echo "==================================="
    
    if command_exists composer; then
        # Check if APCu is available
        if php -m | grep -q "apcu"; then
            echo "Using APCu autoloader..."
            composer dump-autoload --optimize --apcu --no-dev
        else
            echo "Using standard optimized autoloader..."
            composer dump-autoload --optimize --no-dev
        fi
        echo -e "${GREEN}✓ Autoloader optimized${NC}"
    else
        echo -e "${YELLOW}⚠ Composer not found, skipping autoloader optimization${NC}"
    fi

    echo ""
    echo "==================================="
    echo "Step 4: Doctrine Optimizations"
    echo "==================================="
    
    # Ensure Doctrine proxies are generated
    echo "Ensuring Doctrine proxies are generated..."
    php bin/console doctrine:cache:clear-metadata --env=prod
    php bin/console doctrine:cache:clear-query --env=prod
    php bin/console doctrine:cache:clear-result --env=prod
    echo -e "${GREEN}✓ Doctrine caches cleared${NC}"
fi

echo ""
echo "==================================="
echo "Performance Check Summary"
echo "==================================="

# Count cache files
CACHE_FILES=$(find var/cache/$ENV -type f 2>/dev/null | wc -l)
echo "Cache files generated: $CACHE_FILES"

# Check cache directory size
CACHE_SIZE=$(du -sh var/cache/$ENV 2>/dev/null | cut -f1)
echo "Cache directory size: $CACHE_SIZE"

echo ""
echo "==================================="
echo "Optimization Tips"
echo "==================================="

if [ "$ENV" != "prod" ]; then
    echo -e "${YELLOW}⚠ You're in development mode${NC}"
    echo "  For maximum performance, deploy with APP_ENV=prod"
fi

if ! php -i | grep -q "opcache.enable => On"; then
    echo ""
    echo -e "${YELLOW}⚠ OPcache is not enabled${NC}"
    echo "  Add to php.ini:"
    echo "  opcache.enable=1"
    echo "  opcache.memory_consumption=256"
    echo "  opcache.max_accelerated_files=20000"
    echo "  opcache.validate_timestamps=0"
fi

if ! php -m | grep -q "apcu"; then
    echo ""
    echo -e "${YELLOW}⚠ APCu is not installed${NC}"
    echo "  Install with: pecl install apcu"
    echo "  Then add to php.ini: extension=apcu"
fi

echo ""
echo -e "${GREEN}==================================="
echo "Optimization Complete!"
echo "===================================${NC}"
echo ""
echo "Next steps:"
echo "1. Review PERFORMANCE_OPTIMIZATIONS.md for more details"
echo "2. Update controllers to use optimized repository methods"
echo "3. Monitor performance with Symfony Profiler"
echo ""
