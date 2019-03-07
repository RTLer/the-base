FROM php:7.2-fpm-alpine

ENV TZ=Asia/Tehran \
    PHP_MEMORY_LIMIT=128M \
    PHP_UPLOAD_MAX_SILE_SIZE=50M \
    PHP_POST_MAX_SIZE=50M

RUN apk add --update --no-cache tzdata curl ca-certificates

RUN wget https://getcomposer.org/composer.phar && \
        chmod +x composer.phar && \
        mv composer.phar /usr/bin/composer
RUN set -ex \
  && apk --no-cache add \
    postgresql-dev && \
    docker-php-ext-install pdo pdo_pgsql
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install pcntl
RUN apk --no-cache add libxml2-dev
RUN apk --no-cache add libpng-dev
RUN docker-php-ext-install gd
RUN docker-php-ext-install zip

RUN echo "file_uploads = On\n"\
"date.timezone = ${TZ}\n"\
"memory_limit = 500M\n"\
"upload_max_filesize = 500M\n"\
"post_max_size = 500M\n"\
"max_execution_time = 600\n"\
         > user.ini

RUN cp /usr/share/zoneinfo/${TZ} /etc/localtime && \
        echo "${TZ}" > /etc/timezone

RUN mkdir -p   /.composer /.config && \
    chgrp -R 0 /.composer /.config /var/log /var/run /var/tmp && \
    chmod -R g=u,a+rx /.composer /.config /var/log /var/run /var/tmp && \
    rm -rf /var/cache/apk/*

RUN composer global require hirak/prestissimo

WORKDIR /var/www/html

COPY ./composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader --prefer-dist --no-dev \
                     --working-dir=/var/www/html

COPY ./ /tmp/app
RUN chgrp -R 0 /tmp/app && \
    chmod -R g=u /tmp/app && \
    cp -a /tmp/app/. /var/www/html && \
    rm -rf /tmp/app && \
    composer dump-autoload --optimize

VOLUME ["/var/www/html"]
CMD ["php-fpm"]
