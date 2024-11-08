FROM php:fpm

RUN <<EOF
apt-get update
apt-get install -y --no-install-recommends git libzip-dev unzip libicu-dev
EOF

RUN docker-php-ext-install zip intl

RUN mkdir /composer-home

ENV COMPOSER_HOME="/composer-home"

RUN echo '{"config":{"cache-read-only": true}}' > /composer-home/config.json

RUN mkdir /composer-writable

# Latest release
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

WORKDIR /composer-writable

ENTRYPOINT ["/usr/bin/composer"]

CMD ["about"]
