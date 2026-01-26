FROM php:8.2-apache

# Install necessary system libraries for PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Ensure this line is in your Dockerfile to support the new database
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Install the PostgreSQL PDO extension
RUN docker-php-ext-install pdo pdo_pgsql

# Install Composer binary directly
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html

# Copy all project files into the container
COPY . .

# Install PHP dependencies defined in composer.json
RUN composer install --no-interaction --optimize-autoloader

# Expose port 80 for the Apache web server
EXPOSE 80