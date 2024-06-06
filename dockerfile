FROM php:8.3-apache

RUN apt-get update
RUN apt-get install -y \
	pkg-config\
	libcurl4-openssl-dev\
	libfreetype6-dev \
	libjpeg62-turbo-dev \
	libpng-dev

RUN docker-php-ext-install\
	pdo_mysql\
	mysqli

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite ssl

RUN mkdir -p /app/public

WORKDIR /var/www
RUN rm -rf html
RUN ln -s /app/public
RUN mv public html

WORKDIR /app

COPY conf/app.conf /etc/apache2/conf-available/app.conf
RUN a2enconf app

COPY sites/secure.conf /etc/apache2/sites-available/secure.conf
RUN a2ensite secure

COPY default-certs /certs

COPY default-index.php public/index.php

EXPOSE 80 443
