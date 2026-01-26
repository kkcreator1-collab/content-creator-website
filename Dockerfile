FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libssl-dev \
    unzip \
    libmariadb-dev

# Install MySQL extensions instead of MongoDB
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Install Composer correctly (Download the binary)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy your project files
COPY . .

# Install PHP dependencies
# Removed the MongoDB platform requirement ignore flag as it's no longer needed
RUN composer install --no-interaction --optimize-autoloader

# Expose port 80
EXPOSE 80