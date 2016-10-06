From ubuntu:latest

#update apt
RUN apt-get update -y

#install php
RUN apt-get install -y  php7.0-fpm \
    php7.0-cli \
    php7.0-common \ 
    php7.0-opcache \
    php7.0-mysql \
    php7.0-phpdbg \
    php7.0-mbstring \ 
    php7.0-gd \
    php7.0-imap \
    php7.0-ldap \
    php7.0-pgsql \
    php7.0-pspell \
    php7.0-recode \
    php7.0-snmp \
    php7.0-tidy \
    php7.0-dev \
    php7.0-intl \
    php7.0-gd \
    php7.0-curl \
    php7.0-zip \
    php7.0-xml\
    supervisor
    
##
RUN    sed -i -e 's/pm.max_children = 5/pm.max_children = 10/g' \
        -e 's/pm.start_servers = 2/pm.start_servers = 3/g' \
        -e 's/pm.min_spare_servers = 1/pm.min_spare_servers = 2/g' \
        -e 's/pm.max_spare_servers = 3/pm.max_spare_servers = 5/g' \
        -e 's/pm.max_requests = 500/pm.max_requests = 300/g' \
        -e 's/www-data/\$pool/g' \
        -e 's/listen.group = \$pool/listen.group = ${RUN_GROUP}/g' \
        -e "s/\[www\]/[${WP_USER}]/g" \
        -e 's/\/run\/php\/php7.0-fpm.sock/127.0.0.1:9000/g' /etc/php/7.0/fpm/pool.d/www.conf
RUN rm -Rf /etc/nginx/conf.d/* && \
    rm -Rf /etc/nginx/sites-enabled/default
RUN mkdir /run/php/
    
#add supervisor for php
ADD nginx_supervisor.conf /etc/supervisor/conf.d/php_supervisor.conf

CMD ["supervisor", "-c", "/etc/supervisor.conf/php_supervisor.conf"]
    
