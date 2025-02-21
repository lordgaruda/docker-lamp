FROM php:8.4-apache

# Install the mysqli extension
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy the php.ini file
COPY ./site/php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/html