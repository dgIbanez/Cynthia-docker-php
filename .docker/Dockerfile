FROM php:8-apache

RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

WORKDIR /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]
#CMD ["httpd", "-D", "FOREGROUND"]