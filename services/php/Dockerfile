FROM php:fpm

RUN <<EOF
apt-get update
apt-get install -y --no-install-recommends libzip-dev unzip libicu-dev
EOF

RUN docker-php-ext-install pdo pdo_mysql zip intl
