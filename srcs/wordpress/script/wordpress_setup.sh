#!/bin/bash

#Installation des fichier de Wordpress
mkdir /var/www
wget https://wordpress.org/latest.tar.gz
tar xvf latest.tar.gz
rm -rf latetest.tar.gz
mv wordpress/ /var/www/

#Installation des fichiers de configuration Php
mv www.conf /etc/php/7.3/fpm/pool.d/

#Configuation de Wordpress
cd /var/www/wordpress
sed -i "s/username_here/${MYSQLWPUSER}/g" wp-config-sample.php
sed -i "s/password_here/${MYSQLWPPASSWORD}/g" wp-config-sample.php
sed -i "s/localhost/${MYSQLHOSTNAME}/g" wp-config-sample.php
sed -i "s/database_name_here/${MYSQLWPDATABASE}/g" wp-config-sample.php
mv wp-config-sample.php wp-config.php

#Lancement du service php7.3
service php7.3-fpm start