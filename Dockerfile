FROM php:8.2.27-apache

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libmariadb-dev \
    && rm -rf /var/lib/apt/lists/*

# Habilitar docker-php-ext-install
RUN docker-php-source extract

# Instalar la extensión mysqli
RUN docker-php-ext-install mysqli \
    && docker-php-source delete

# Agregar configuracion de PHP
COPY ./php.ini /usr/local/etc/php/php.ini

EXPOSE 80