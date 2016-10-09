# verbose-umbrella-test

This is a repo for Andres Montalban

This is a docker compose project which is intended to demonstrate the use of it, showing the best practices of how to develop a project using docker.

#Recommended versions:

Docker: 1.12~

Docker Compose 1.8~

#Steps to build the project

In order to start the project you'll have to clone the repository

`git clone https://github.com/ponchov/verbose-umbrella-test.git`


head to the directory where the repo was cloned

`cd verbose-umbrella-test`

start the containers

`docker-compose up --build -d`

once you start the project, you'll have to edit your hostfile

`sudo echo "127.0.0.1 testapp.com" > /etc/hosts`

Now you'll be able to visit testapp.com in the browser and see the application

#Notes:

The webserver container utilizes port 80 on yor local machine, so if you want to change the port, you can change it on the `docker-compose.yml` file.

For example:

if you want to use port 90 instead of 80, you can use 
```
web:
    image: nginx:latest
    ports:
        - "90:80"
```

