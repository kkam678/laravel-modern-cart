FROM php:8.2-fpm

WORKDIR /root
RUN apt-get update
RUN apt-get install -y curl npm

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/bin/composer

RUN apt-get install -y zlib1g-dev && apt-get install -y libzip-dev && apt-get install -y vim
RUN docker-php-ext-install zip pdo pdo_mysql mysqli && docker-php-ext-enable mysqli

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/
RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && install-php-extensions imagick
#RUN apt-get update && apt-get install -y libmagickwand-dev --no-install-recommends && rm -rf /var/lib/apt/lists/*
#
## install imagick
## Version is not officially released https://pecl.php.net/get/imagick but following works for PHP 8
#RUN mkdir -p /usr/local/lib/php/extensions/no-debug-non-zts-20210902; \
#    curl -fsSL https://github.com/Imagick/imagick/archive/06116aa24b76edaf6b1693198f79e6c295eda8a9.tar.gz | tar xvz -C "/usr/local/lib/php/extensions/no-debug-non-zts-20210902/imagick" --strip 1; \
#    docker-php-ext-install imagick;
RUN mkdir -p /source/storage/framework/cache /source/storage/framework/views /source/storage/framework/sessions
RUN chmod 0777 -R /source/storage/
WORKDIR /source

COPY .env.example .env
COPY composer.json composer.json

CMD ["npm run dev"]
