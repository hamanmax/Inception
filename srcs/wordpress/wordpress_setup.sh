#!/bin/bash
mkdir /var/www
mv wordpress/ /var/www/
mv www.conf /etc/php/7.3/fpm/pool.d/
service php7.3-fpm start