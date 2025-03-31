# Use PHP 8.0 with Apache
FROM php:8.0-apache

# Install extensions for MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy application files to container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
