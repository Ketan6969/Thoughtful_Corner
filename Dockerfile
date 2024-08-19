FROM php:7.4-apache

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

COPY index.html /var/www/html/index.html
COPY . /var/www/html/
COPY php.ini usr/local/php/etc/
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

EXPOSE 80
