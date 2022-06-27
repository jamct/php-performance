FROM openswoole/swoole:latest-alpine

RUN docker-php-ext-install opcache pcntl

COPY src /code
WORKDIR /code

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN composer install

CMD php artisan octane:start  --workers=auto --task-workers=auto --server=swoole --host=0.0.0.0