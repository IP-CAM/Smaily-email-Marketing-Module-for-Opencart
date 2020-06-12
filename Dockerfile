FROM php:5.6-apache

ENV OPENCART_VERSION 1.5.6.4

# Install packages required for OpenCart.
RUN apt-get update && apt-get install -y --no-install-recommends \
        curl \
        tar \
        libmcrypt-dev \
        libfreetype6-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        # MariaDB for mysqladmin ping in entrypoint
        mariadb-client \
    && docker-php-ext-install mcrypt \
    && docker-php-ext-install mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install gd \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

# Download, extract and prepare OpenCart for installation.
RUN curl -L https://github.com/opencart/opencart/archive/$OPENCART_VERSION.tar.gz > opencart.tar.gz \
    && tar xf opencart.tar.gz \
    && mv opencart-$OPENCART_VERSION/upload/* . \
    && rm -rf opencart.tar.gz opencart-$OPENCART_VERSION/

RUN mv config-dist.php config.php \
    && mv admin/config-dist.php admin/config.php

RUN chown -R www-data:www-data /var/www \
    && find /var/www -type d -exec chmod 2750 {} \+ \
    && find /var/www -type f -exec chmod 640 {} \+

# Install modman
RUN curl -SL https://raw.githubusercontent.com/colinmollenhour/modman/master/modman -o /usr/local/bin/modman \
    && chmod +x /usr/local/bin/modman

# Entrypoint for symlinking Smaily plugin files & OpenCart CLI install
ADD ./.sandbox/entrypoint.sh /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]
