FROM php:8-fpm

# Installing the necessary extensions
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql

# Copy the php.ini configuration file
COPY php.ini /usr/local/etc/php/conf.d/40-custom.ini

# Installing the working directory
WORKDIR /var/www/html
