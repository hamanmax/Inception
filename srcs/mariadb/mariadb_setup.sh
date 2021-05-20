#!/bin/bash

mv /my.cnf /etc/mysql/
/etc/init.d/mysql start && \
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "CREATE DATABASE wpdatabase"
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "CREATE USER 'wpuser' IDENTIFIED BY 'wppass'"
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "GRANT USAGE ON wpdatabase.* TO 'wpuser'@172.35.0.103 IDENTIFIED BY 'wppass' WITH GRANT OPTION"
mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "GRANT ALL PRIVILEGES ON wpdatabase.* TO 'wpuser'@172.35.0.103 IDENTIFIED BY 'wppass' WITH GRANT OPTION;"