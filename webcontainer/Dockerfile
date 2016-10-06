#Elegir la base del container
FROM ubuntu:latest

#update apt
RUN apt-get update -y

#install nginx
RUN apt-get install -y  nginx \
            supervisor
            
#remove default nginx configuration
RUN rm -f /etc/nginx/sites-enabled/default*
ADD site.conf /etc/nginx/sites-enabled/site.conf

#remove and add a nginx.conf
RUN rm -f /etc/nginx/nginx.conf
ADD nginx.conf /etc/nginx.conf

#add supervisor for nginx
ADD nginx_supervisor.conf /etc/supervisor/conf.d/nginx_supervisor.conf

EXPOSE 80

#CMD ["supervisor", "-c", "/etc/supervisor.conf/nginx_supervisor.conf"]

CMD ["/usr/bin/supervisord"]
