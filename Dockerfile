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

# 4. Create the uploads directory and set permissions
# We create the folder and give ownership to the apache user (www-data)
RUN mkdir -p assets/uploads && \
    chown -R www-data:www-data /var/www/html/assets && \
    chmod -R 777 /var/www/html/assets

EXPOSE 80