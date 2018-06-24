FROM php:7.2.5-fpm-alpine3.7

RUN apk update \
    && docker-php-ext-install pdo pdo_mysql 