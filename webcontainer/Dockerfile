#Elegir la base del container
FROM ubuntu:latest

#update apt
RUN apt-get update -y

#install nginx
RUN apt-get install -y  nginx \
            nginx \
            supervisor
            
#remove default nginx configuration
RUN rm /etc/nginx/sites-enabled/default.conf

#remove and add a nginx.conf
RUN rm /etc/nginx/nginx.conf
ADD nginx.conf /etc/nginx.conf



EXPOSE 80
CMD ["/usr/bin/supervisord"]
