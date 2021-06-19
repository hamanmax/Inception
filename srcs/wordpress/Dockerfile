FROM debian:buster

RUN apt-get update -qq -y && apt-get upgrade -qq -y && apt-get install php php-fpm php-cli  php7.3-mysql -y
COPY wordpress_files wordpress/
COPY www.conf /
COPY wordpress_setup.sh /
RUN ./wordpress_setup.sh
ENTRYPOINT ["./usr/sbin/php-fpm7.3", "-F"]
#ENTRYPOINT /bin/bash