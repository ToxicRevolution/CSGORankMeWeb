FROM php:7.2.4-fpm-alpine3.7

RUN apk update && \
    apk add --no-cache php7-memcached php7-pdo_mysql
