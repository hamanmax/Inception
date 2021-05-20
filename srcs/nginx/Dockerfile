FROM debian:buster

COPY TSL1_3.sh  default /
RUN apt-get update -qq -y && apt-get upgrade -qq -y 2> /dev/null
RUN apt-get install nginx zsh openssl htop vim -y -qq
RUN ./TSL1_3.sh
ENTRYPOINT ["nginx", "-g", "daemon off;"]
#ENTRYPOINT /bin/bash

EXPOSE 80 443