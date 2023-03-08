FROM ubuntu

MAINTAINER Hubert Kuch
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update -q
RUN apt-get install -y apache2 && apt-get clean

COPY bin/sites-available/000-default.conf /etc/apache2/sites-available
RUN a2enmod rewrite

RUN apt-get update

CMD a2site 000-default
RUN apt-get install -y --no-install-recommends php8.1

CMD apachectl -D FOREGROUND
EXPOSE 80
