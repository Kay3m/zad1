FROM php:7.4-apache

LABEL maintainer="Klaudia Mikitiuk klaudia.mikitiuk@pollub.edu.pl"
LABEL description="Zadanie 1"

COPY index.php /var/www/html

EXPOSE 8000


