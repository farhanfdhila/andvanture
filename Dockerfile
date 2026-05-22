FROM php:8.2-apache
RUN apt-get update && apt-get install -y libzip-dev zip unzip
RUN docker-php-ext-install pdo_mysql pdo
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf
EXPOSE 80