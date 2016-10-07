From ubuntu:latest

#
Run apt-get update

# install mysql 

Run apt-get install mysql-server -y \
 supervisor \
 git

RUN mkdir /var/www/umbrella
RUN git clone https://github.com/datacharmer/test_db.git /var/www/umbrella/


EXPOSE 3306
