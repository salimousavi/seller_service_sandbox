FROM php:8.2-apache

RUN echo "ServerName SellerServiceSandbox" >> /etc/apache2/apache2.conf

RUN apt-get update \
    && apt-get install -qq -y --no-install-recommends \
    cron \
    vim \
    locales \
    coreutils \
    apt-utils \
    git \
    libicu-dev \
    g++ \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    libxslt-dev \
    zlib1g-dev \
    libsasl2-dev \
    libssl-dev \
    librdkafka-dev

RUN echo "en_US.UTF-8 UTF-8" >> /etc/locale.gen && \
    echo "fa_IR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer

RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_mysql mysqli gd opcache intl zip calendar dom mbstring zip gd xsl && a2enmod rewrite

# Apcu php ext
RUN pecl install apcu && docker-php-ext-enable apcu

# Redis php ext
RUN pecl install redis && docker-php-ext-enable redis

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions amqp

COPY ./Docker/worker/vhosts /etc/apache2/sites-enabled

COPY . /var/www
RUN chown -R 775 /var/www

WORKDIR /var/www

