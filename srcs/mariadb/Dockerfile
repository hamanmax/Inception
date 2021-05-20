FROM debian:buster

RUN apt-get update -qq -y && apt-get upgrade -qq -y && apt-get install -qq -y mariadb-server
COPY mariadb_setup.sh /
COPY my.cnf /
RUN ./mariadb_setup.sh
ENTRYPOINT [ "mysqld_safe" ]
#ENTRYPOINT [ "bash" ]