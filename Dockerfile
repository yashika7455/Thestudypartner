# Dockerfile
FROM php:8.2-apache

# Enable common PHP extensions if needed
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy app code
COPY . /var/www/html/

# Give proper permissions (optional)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
