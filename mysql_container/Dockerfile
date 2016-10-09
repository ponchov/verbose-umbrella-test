FROM mysql:5.6

RUN apt update -y ; apt install git -y

RUN git clone https://github.com/datacharmer/test_db.git /test_db
WORKDIR /test_db
ADD employees.sql /docker-entrypoint-initdb.d/
RUN rm -f employees.sql employees_partitioned_5.1.sql employees_partitioned.sql 
RUN mv * /
