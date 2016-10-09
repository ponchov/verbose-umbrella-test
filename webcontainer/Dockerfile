#Elegir la base del container
FROM ubuntu:latest

#update apt
RUN apt-get update -y

#install nginx
RUN apt-get install -y  nginx \
            supervisor
            
#remove default nginx configuration
RUN rm -f /etc/nginx/sites-enabled/*
ADD site.conf /etc/nginx/sites-enabled/site.conf

#remove and add a nginx.conf
RUN rm -f /etc/nginx/nginx.conf
ADD nginx.conf /etc/nginx/nginx.conf
#RUN cat /etc/nginx/sites-enabled/site.conf
#RUN nginx -t
#ADD php scripts
RUN mkdir /var/www/umbrella
ADD search_employees.php /var/www/umbrella/
ADD employees.php /var/www/umbrella/
ADD index.html  /var/www/umbrella/

#add supervisor for nginx
ADD start.sh /start.sh
ADD nginx_supervisor.conf /etc/supervisor/supervisord.conf

CMD ["supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

#CMD ["/start.sh"]
#CMD ["nginx", "-g", "'daemon off;'"]
