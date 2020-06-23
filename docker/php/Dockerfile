FROM php:7.2-fpm

RUN apt-get update

RUN \
    docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-configure mysqli --with-mysqli=mysqlnd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install pdo \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

#ADD ./php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/html

#USER 1000:1000

CMD ["php-fpm"]
