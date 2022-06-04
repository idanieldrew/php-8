FROM php:8.1.7RC1-fpm-bullseye

COPY . /usr/src/myapp

WORKDIR /usr/src/myapp

CMD [ "php", "Union/index.php" ]