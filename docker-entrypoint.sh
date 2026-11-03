#!/bin/bash
set -e

# Configure Apache to listen on $PORT if provided by Render
if [ -n "$PORT" ]; then
    sed -i "s/Listen 80/Listen $PORT/" /etc/apache2/ports.conf
    sed -i "s/:80/:$PORT/" /etc/apache2/sites-available/000-default.conf
fi

# Ensure correct permissions on uploads
chown -R www-data:www-data /var/www/html/wp-content/uploads /var/www/html/admin 2>/dev/null || true

exec "$@"
