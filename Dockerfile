FROM php:apache

RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

COPY ./website /var/www/html/
COPY ./php-config/php.conf /etc/apache2/conf-available
RUN a2enconf php.conf

# Restante do seu Dockerfile...

