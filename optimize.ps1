# Performance Optimization Script for Symfony Application
# PowerShell version for Windows

param(
    [string]$Environment = "dev"
)

Write-Host "===================================" -ForegroundColor Cyan
Write-Host "Symfony Performance Optimization" -ForegroundColor Cyan
Write-Host "===================================" -ForegroundColor Cyan
Write-Host ""

# Determine environment
if ($env:APP_ENV -eq "prod") {
    Write-Host "Running in PRODUCTION mode" -ForegroundColor Green
    $ENV_MODE = "prod"
} else {
    if ($Environment -eq "prod") {
        $ENV_MODE = "prod"
        Write-Host "Running in PRODUCTION mode" -ForegroundColor Green
    } else {
        Write-Host "Running in DEVELOPMENT mode" -ForegroundColor Yellow
        $ENV_MODE = "dev"
    }
}

Write-Host ""

# Function to check if command exists
function Test-CommandExists {
    param($Command)
    $null -ne (Get-Command $Command -ErrorAction SilentlyContinue)
}

# Check PHP
if (-not (Test-CommandExists "php")) {
    Write-Host "✗ PHP not found in PATH" -ForegroundColor Red
    exit 1
}

# Check PHP OPcache
Write-Host "Checking PHP OPcache..." -ForegroundColor Cyan
$phpInfo = php -i | Select-String "opcache.enable => On"
if ($phpInfo) {
    Write-Host "✓ OPcache is enabled" -ForegroundColor Green
} else {
    Write-Host "✗ OPcache is NOT enabled" -ForegroundColor Red
    Write-Host "  Enable OPcache in php.ini for better performance" -ForegroundColor Yellow
}

# Check APCu
Write-Host "Checking APCu..." -ForegroundColor Cyan
$apcuModule = php -m | Select-String "apcu"
if ($apcuModule) {
    Write-Host "✓ APCu extension is installed" -ForegroundColor Green
} else {
    Write-Host "✗ APCu extension is NOT installed" -ForegroundColor Red
    Write-Host "  Install APCu for better caching performance" -ForegroundColor Yellow
}

Write-Host ""
Write-Host "===================================" -ForegroundColor Cyan
Write-Host "Step 1: Clearing Cache" -ForegroundColor Cyan
Write-Host "===================================" -ForegroundColor Cyan

try {
    php bin/console cache:clear --env=$ENV_MODE --no-debug
    Write-Host "✓ Cache cleared" -ForegroundColor Green
} catch {
    Write-Host "✗ Failed to clear cache: $_" -ForegroundColor Red
}

Write-Host ""
Write-Host "===================================" -ForegroundColor Cyan
Write-Host "Step 2: Warming Up Cache" -ForegroundColor Cyan
Write-Host "===================================" -ForegroundColor Cyan

try {
    php bin/console cache:warmup --env=$ENV_MODE --no-debug
    Write-Host "✓ Cache warmed up" -ForegroundColor Green
} catch {
    Write-Host "✗ Failed to warm up cache: $_" -ForegroundColor Red
}

if ($ENV_MODE -eq "prod") {
    Write-Host ""
    Write-Host "===================================" -ForegroundColor Cyan
    Write-Host "Step 3: Optimizing Autoloader" -ForegroundColor Cyan
    Write-Host "===================================" -ForegroundColor Cyan
    
    if (Test-CommandExists "composer") {
        try {
            # Check if APCu is available
            if ($apcuModule) {
                Write-Host "Using APCu autoloader..." -ForegroundColor Yellow
                composer dump-autoload --optimize --apcu --no-dev 2>&1 | Write-Host
            } else {
                Write-Host "Using standard optimized autoloader..." -ForegroundColor Yellow
                composer dump-autoload --optimize --no-dev 2>&1 | Write-Host
            }
            Write-Host "✓ Autoloader optimized" -ForegroundColor Green
        } catch {
            Write-Host "✗ Failed to optimize autoloader: $_" -ForegroundColor Red
        }
    } else {
        Write-Host "⚠ Composer not found, skipping autoloader optimization" -ForegroundColor Yellow
    }

    Write-Host ""
    Write-Host "===================================" -ForegroundColor Cyan
    Write-Host "Step 4: Doctrine Optimizations" -ForegroundColor Cyan
    Write-Host "===================================" -ForegroundColor Cyan
    
    try {
        Write-Host "Clearing Doctrine caches..." -ForegroundColor Yellow
        php bin/console doctrine:cache:clear-metadata --env=prod 2>&1 | Write-Host
        php bin/console doctrine:cache:clear-query --env=prod 2>&1 | Write-Host
        php bin/console doctrine:cache:clear-result --env=prod 2>&1 | Write-Host
        Write-Host "✓ Doctrine caches cleared" -ForegroundColor Green
    } catch {
        Write-Host "⚠ Some Doctrine cache operations failed (this is normal if not configured)" -ForegroundColor Yellow
    }
}

Write-Host ""
Write-Host "===================================" -ForegroundColor Cyan
Write-Host "Performance Check Summary" -ForegroundColor Cyan
Write-Host "===================================" -ForegroundColor Cyan

# Count cache files
$cachePath = "var\cache\$ENV_MODE"
if (Test-Path $cachePath) {
    $cacheFiles = (Get-ChildItem -Path $cachePath -Recurse -File).Count
    Write-Host "Cache files generated: $cacheFiles"
    
    $cacheSize = (Get-ChildItem -Path $cachePath -Recurse | Measure-Object -Property Length -Sum).Sum
    $cacheSizeMB = [math]::Round($cacheSize / 1MB, 2)
    Write-Host "Cache directory size: $cacheSizeMB MB"
} else {
    Write-Host "Cache directory not found"
}

Write-Host ""
Write-Host "===================================" -ForegroundColor Cyan
Write-Host "Optimization Tips" -ForegroundColor Cyan
Write-Host "===================================" -ForegroundColor Cyan

if ($ENV_MODE -ne "prod") {
    Write-Host ""
    Write-Host "⚠ You're in development mode" -ForegroundColor Yellow
    Write-Host "  For maximum performance, run with -Environment prod" -ForegroundColor Yellow
    Write-Host "  Or set environment variable: `$env:APP_ENV='prod'" -ForegroundColor Yellow
}

if (-not $phpInfo) {
    Write-Host ""
    Write-Host "⚠ OPcache is not enabled" -ForegroundColor Yellow
    Write-Host "  Add to php.ini:" -ForegroundColor Yellow
    Write-Host "  opcache.enable=1"
    Write-Host "  opcache.memory_consumption=256"
    Write-Host "  opcache.max_accelerated_files=20000"
    Write-Host "  opcache.validate_timestamps=0"
    Write-Host ""
    Write-Host "  Find php.ini location with: php --ini" -ForegroundColor Cyan
}

if (-not $apcuModule) {
    Write-Host ""
    Write-Host "⚠ APCu is not installed" -ForegroundColor Yellow
    Write-Host "  Download from: https://pecl.php.net/package/APCu" -ForegroundColor Yellow
    Write-Host "  Then add to php.ini: extension=php_apcu.dll" -ForegroundColor Yellow
}

Write-Host ""
Write-Host "===================================" -ForegroundColor Green
Write-Host "Optimization Complete!" -ForegroundColor Green
Write-Host "===================================" -ForegroundColor Green
Write-Host ""
Write-Host "Next steps:"
Write-Host "1. Review PERFORMANCE_OPTIMIZATIONS.md for more details"
Write-Host "2. Update controllers to use optimized repository methods"
Write-Host "3. Monitor performance with Symfony Profiler"
Write-Host ""
Write-Host "Usage examples:" -ForegroundColor Cyan
Write-Host "  Development: .\optimize.ps1" -ForegroundColor Gray
Write-Host "  Production:  .\optimize.ps1 -Environment prod" -ForegroundColor Gray
Write-Host ""
