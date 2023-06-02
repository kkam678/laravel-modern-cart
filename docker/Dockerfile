FROM php:8.2-fpm

WORKDIR /root
RUN apt-get update
RUN apt-get install -y curl npm

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/bin/composer

RUN apt-get install -y zlib1g-dev && apt-get install -y libzip-dev && apt-get install -y vim
RUN docker-php-ext-install zip pdo pdo_mysql mysqli opcache && docker-php-ext-enable mysqli opcache

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/
RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && install-php-extensions imagick
RUN mkdir -p /source/storage/framework/cache /source/storage/framework/views /source/storage/framework/sessions
RUN chmod 0777 -R /source/storage/
WORKDIR /source

COPY .env.example .env
COPY composer.json composer.json

CMD ["php-fpm"]
