#!/bin/bash
mkdir /var/www
mv wordpress/ /var/www/
mv www.conf /etc/php/7.3/fpm/pool.d/
cd /var/www/wordpress
sed -i "s/username_here/$MYSQLWPUSER/g" wp-config.php
sed -i "s/password_here/$MYSQLWPPASSWORD/g" wp-config.php
sed -i "s/localhost/$MYSQLHOSTNAME/g" wp-config.php
sed -i "s/database_name_here/$MYSQLWPDATABASE/g" wp-config.php
service php7.3-fpm start