#!/bin/bash
set -e

# Configure Apache to listen on $PORT if provided by Render
if [ -n "$PORT" ]; then
    sed -i "s/Listen 80/Listen $PORT/" /etc/apache2/ports.conf
    sed -i "s/:80/:$PORT/" /etc/apache2/sites-available/000-default.conf
fi

# Ensure correct permissions on uploads
chown -R www-data:www-data /var/www/html/wp-content/uploads /var/www/html/admin 2>/dev/null || true

# Adapt .htaccess for container root path and standard Apache mod_php
if [ -f /var/www/html/.htaccess ]; then
    sed -i 's|RewriteBase /Ggani_Foundation/|RewriteBase /|g' /var/www/html/.htaccess
    sed -i 's|RewriteRule \. /Ggani_Foundation/index\.php|RewriteRule . /index.php|g' /var/www/html/.htaccess
    sed -i '/AddHandler application\/x-httpd-ea-php/d' /var/www/html/.htaccess
fi

exec "$@"
