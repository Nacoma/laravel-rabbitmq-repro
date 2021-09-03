FROM php:8.0.10-cli-alpine

RUN apk add --no-cache bash

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN docker-php-ext-install -j$(nproc) pcntl sockets

WORKDIR /app

COPY . /app

RUN composer install

