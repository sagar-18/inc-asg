#!/bin/bash

service mysql start

mysql -e "CREATE DATABASE wp_inc;" \
  -e "CREATE USER 'wp_inc'@'localhost' IDENTIFIED BY 'wp1nc42';" \
  -e "GRANT ALL PRIVILEGES ON wp_inc.* TO 'wp_inc'@'localhost';" \
  -e "FLUSH PRIVILEGES;"

mysql -u wp_inc -p'wp1nc42' wp_inc < /var/www/html/dump.sql

rm /var/www/html/dump.sql
