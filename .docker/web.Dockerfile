FROM nginx:stable

ADD ./conf/nginx.conf /etc/nginx/conf.d/default.conf