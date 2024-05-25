FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get install -y nginx php8.1-fpm php8.1-mysql mysql-server

COPY default.conf /etc/nginx/sites-available/default

WORKDIR /var/www/html

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

RUN chmod +x /var/www/html/mysql_setup.sh

CMD service mysql start && /var/www/html/mysql_setup.sh && service php8.1-fpm start && nginx -g "daemon off;"