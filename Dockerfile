FROM php:latest
ADD . /app
WORKDIR /app
RUN apt-get update; apt-get install apt-utils gnupg2 -y > /dev/null 2>&1
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash -; apt-get install -y nodejs > /dev/null 2>&1
RUN php -r "readfile('https://getcomposer.org/installer');" | php
RUN php composer.phar install
RUN npm i -g yarn gulp netlify-cli; yarn; gulp
RUN netlify -t $NETLIFY_TOKEN deploy --site-id sharp-goldstine-eda64e -p build_local