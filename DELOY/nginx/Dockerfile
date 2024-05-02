FROM nginx:alpine

LABEL maintainer="Mahmoud Zalt <mahmoud@zalt.me>"

COPY nginx.conf /etc/nginx/

# If you're in China, or you need to change sources, will be set CHANGE_SOURCE to true in .env.

ARG CHANGE_SOURCE=false
RUN if [ ${CHANGE_SOURCE} = true ]; then \
    # Change application source from dl-cdn.alpinelinux.org to aliyun source
    sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/' /etc/apk/repositories \
;fi

#RUN echo ' 14-15/*  *  *  *  * curl -S "https://c369.light-skunk-49.telebit.io/crontab/onchain?p=2"' >> /etc/crontabs/root
#RUN echo ' 16-17/*  *  *  *  * curl -S "https://c369.light-skunk-49.telebit.io/crontab/onchain?p=3"' >> /etc/crontabs/root
#RUN echo ' 18-19/*  *  *  *  * curl -S "https://c369.light-skunk-49.telebit.io/crontab/onchain?p=4"' >> /etc/crontabs/root
#RUN echo ' 20-21/*  *  *  *  * curl -S "https://c369.light-skunk-49.telebit.io/crontab/onchain?p=6"' >> /etc/crontabs/root
#RUN echo ' 22-23/*  *  *  *  * curl -S "https://c369.light-skunk-49.telebit.io/crontab/onchain?p=alert"' >> /etc/crontabs/root


#RUN echo ' */1  *  *  *  * curl -S "https://c369.light-skunk-49.telebit.io/crontab/feel"' >> /etc/crontabs/root
#RUN echo ' 0  *  *  *  * curl -S "https://c369.light-skunk-49.telebit.io/crontab/onehour"' >> /etc/crontabs/root
#RUN echo ' 0  1  *  *  *  curl -S "https://c369.light-skunk-49.telebit.io/crontab/oneday"' >> /etc/crontabs/root
#RUN echo ' */1  *  *  *  * curl -S "https://c369.light-skunk-49.telebit.io/crontab/tensecond"' >> /etc/crontabs/root
#RUN echo ' */5  *  *  *  * curl -S "https://c369.light-skunk-49.telebit.io/crontab/fireminus"' >> /etc/crontabs/root


#RUN echo ' *  *  *  *  * (sleep 10 ;curl -S "https://c369.light-skunk-49.telebit.io/crontab/tensecond")' >> /etc/crontabs/root
#RUN echo ' *  *  *  *  * (sleep 20 ;curl -S "https://c369.light-skunk-49.telebit.io/crontab/tensecond")' >> /etc/crontabs/root
#RUN echo ' *  *  *  *  * (sleep 30 ;curl -S "https://c369.light-skunk-49.telebit.io/crontab/tensecond")' >> /etc/crontabs/root
#RUN echo ' *  *  *  *  * (sleep 40 ;curl -S "https://c369.light-skunk-49.telebit.io/crontab/tensecond")' >> /etc/crontabs/root
#RUN echo ' *  *  *  *  * (sleep 50 ;curl -S "https://c369.light-skunk-49.telebit.io/crontab/tensecond")' >> /etc/crontabs/root
#CMD ["/usr/sbin/crond", "-f"]

RUN apk update \
    && apk upgrade \
    && apk --update add logrotate \
    && apk add --no-cache openssl \
    && apk add --no-cache bash

RUN apk add --no-cache curl

RUN set -x ; \
    addgroup -g 82 -S www-data ; \
    adduser -u 82 -D -S -G www-data www-data && exit 0 ; exit 1

ARG PHP_UPSTREAM_CONTAINER=php-fpm
ARG PHP_UPSTREAM_PORT=9000

# Create 'messages' file used from 'logrotate'
RUN touch /var/log/messages

# Copy 'logrotate' config file
COPY logrotate/nginx /etc/logrotate.d/

# Set upstream conf and remove the default conf
RUN echo "upstream php-upstream { server ${PHP_UPSTREAM_CONTAINER}:${PHP_UPSTREAM_PORT}; }" > /etc/nginx/conf.d/upstream.conf \
    && rm /etc/nginx/conf.d/default.conf

ADD ./startup.sh /opt/startup.sh
RUN sed -i 's/\r//g' /opt/startup.sh
CMD ["/bin/bash", "/opt/startup.sh"]

EXPOSE 80 81 443
