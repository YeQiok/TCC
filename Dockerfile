FROM php:7.2-apache
COPY src/ /var/www/html/

#docker build -t tcc .
#docker run -p 80:80 -d --name tcc-php tcc