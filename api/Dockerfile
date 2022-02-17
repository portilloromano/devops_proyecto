FROM geekshubs/geekshubs-php-fom80-nginx as api

WORKDIR /var/www
COPY . /var/www

RUN usermod -u 1000 www-data
RUN groupmod -g 1000 www-data
