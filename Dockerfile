FROM php:7.2-apache
RUN docker-php-ext-install mysqli pdo_mysql

COPY php/ /var/www/html/
COPY src/ /var/www/html/

#docker build -t tcc .
#docker run -p 80:80 -d --name tcc-php tcc

# para subir a aplicacao do docker compose
# docker-compose up --build

# para parar as aplicacoes do docker compose
# docker-compose down

# limpa os volumes se necessario
# docker system prune --force --volumes