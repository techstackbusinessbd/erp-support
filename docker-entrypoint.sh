#!/bin/bash
set -e

# Run Laravel migrations and caching commands
echo "Running migrations..."
php artisan migrate --force

echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Execute the main container command (e.g., apache2-foreground)
exec "$@"
