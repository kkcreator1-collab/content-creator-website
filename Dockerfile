FROM php:8.2-apache

# Install necessary system libraries for MySQL
RUN apt-get update && apt-get install -y \
    libmariadb-dev \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install the MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Install Composer binary directly (avoids APT dependency issues)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
COPY . .

# Install dependencies (will now ignore old MongoDB libraries)
RUN composer install --no-interaction --optimize-autoloader

EXPOSE 80