FROM debian:buster

RUN apt-get update -qq -y && apt-get upgrade -qq -y && apt-get install php php-fpm php-cli  php7.3-mysql wget -y
COPY conf/www.conf /
COPY script/wordpress_setup.sh /
ARG MYSQLWPUSER
ARG MYSQLWPDATABASE
ARG MYSQLWPPASSWORD
ARG MYSQLHOSTNAME
RUN ./wordpress_setup.sh
RUN rm wordpress_setup.sh
ENTRYPOINT ["./usr/sbin/php-fpm7.3", "-F"]