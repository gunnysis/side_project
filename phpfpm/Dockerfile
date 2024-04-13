FROM php:8.3.5RC1-fpm-alpine3.19

# install composer and setting composer command
RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer

# Could Not Find Driver
RUN docker-php-ext-install mysqli pdo pdo_mysql

# install npm and nodejs
RUN apk add --update nodejs-current npm