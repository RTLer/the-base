FROM nginx:1.13-alpine

ADD ./default.conf /etc/nginx/conf.d/default.conf
RUN mkdir -p /var/www/html/public/
RUN touch /var/www/html/public/index.php

STOPSIGNAL SIGQUIT
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]

