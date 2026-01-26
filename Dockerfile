FROM php:8.2-apache

# Install system dependencies and MongoDB extension
RUN apt-get update && apt-get install -y \
    libssl-dev \
    unzip \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb

# Install Composer correctly (Download the binary)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy your project files
COPY . .

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader --ignore-platform-req=ext-mongodb

# Expose port 80
EXPOSE 80