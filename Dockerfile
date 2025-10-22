FROM php:8.2-apache

# Instala extensiones necesarias de PHP para MySQL
RUN apt-get update && apt-get install -y libpq-dev \
&& docker-php-ext-install pdo pdo_pgsql

# Copia el código fuente al contenedor
COPY FRONTEND/ /var/www/html/


RUN chown -R www-data:www-data /var/www/html/

# Habilita mod_rewrite para URLs amigables
RUN a2enmod rewrite

EXPOSE 80