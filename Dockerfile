FROM php:8.2-apache
RUN apt-get update && apt-get install -y libssl-dev composer && pecl install mongodb && docker-php-ext-enable mongodb
RUN composer init
RUN composer require mongodb/mongodb
COPY . /var/www/html/
RUN a2enmod rewrite
EXPOSE 80