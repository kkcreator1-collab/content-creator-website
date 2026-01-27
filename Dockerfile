FROM php:8.2-apache

# 1. Install system libraries for PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && rm -rf /var/lib/apt/lists/*

# 2. Install the native PostgreSQL driver
RUN docker-php-ext-install pdo pdo_pgsql

# 3. Set up your files
WORKDIR /var/www/html
COPY . .

# NOTE: Removed 'composer install' because your project 
# is now using native extensions and no external libraries.

EXPOSE 80