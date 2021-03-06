FROM php:7.2-cli-alpine

ENV TZ=Asia/Tehran \
    PHP_MEMORY_LIMIT=128M \
    PHP_UPLOAD_MAX_SILE_SIZE=50M \
    PHP_POST_MAX_SIZE=50M

RUN apk add --update --no-cache tzdata curl ca-certificates
RUN apk add supervisor --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --no-cache

RUN wget https://getcomposer.org/composer.phar && \
        chmod +x composer.phar && \
        mv composer.phar /usr/bin/composer
RUN set -ex \
  && apk --no-cache add \
    postgresql-dev && \
    docker-php-ext-install pdo pdo_pgsql pcntl
RUN docker-php-ext-install bcmath
RUN apk --no-cache add libxml2-dev
RUN apk --no-cache add libpng-dev
RUN docker-php-ext-install gd
RUN docker-php-ext-install zip

RUN cp /usr/share/zoneinfo/${TZ} /etc/localtime && \
        echo "${TZ}" > /etc/timezone

RUN mkdir -p   /.composer /.config && \
    chgrp -R 0 /.composer /.config /var/log /var/run /var/tmp && \
    chmod -R g=u,a+rx /.composer /.config /var/log /var/run /var/tmp && \
    rm -rf /var/cache/apk/*

RUN composer global require hirak/prestissimo

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader --prefer-dist --no-dev \
                     --working-dir=/var/www/html

COPY ./ /tmp/app
RUN chgrp -R 0 /tmp/app && \
    chmod -R g=u /tmp/app && \
    cp -a /tmp/app/. /var/www/html && \
    rm -rf /tmp/app && \
    composer dump-autoload --optimize

WORKDIR /etc/supervisor
VOLUME ["/etc/supervisor"]

CMD ["supervisord", "-c", "/etc/supervisor/queue.conf"]