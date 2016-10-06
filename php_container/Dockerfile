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
    
    
    
#add supervisor for php
ADD nginx_supervisor.conf /etc/supervisor/conf.d/php_supervisor.conf

CMD ["supervisor", "-c", "/etc/supervisor.conf/php_supervisor.conf"]
    
