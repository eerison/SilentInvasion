FROM php:7.1-apache
RUN docker-php-ext-install pdo pdo_mysql
COPY custom.ini /usr/local/etc/php/conf.d/custom.ini