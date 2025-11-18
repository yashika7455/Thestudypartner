FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy project files into container
COPY . /var/www/html

# Optional: install common PHP extensions (ignore errors if not needed)
RUN docker-php-ext-install mysqli pdo pdo_mysql || true

# Fix ownership for Apache
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
