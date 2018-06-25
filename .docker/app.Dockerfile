FROM php:7.2.5-fpm-alpine3.7

RUN apk update \
    && apk add gmp-dev \
    && docker-php-ext-install pdo pdo_mysql gmp 