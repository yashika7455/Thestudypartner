FROM php:8.2-apache
COPY . .
EXPOSE 80
CMD ["apache2-foreground"]
