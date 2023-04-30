FROM mysql:latest
COPY redlock-db.sql /docker-entrypoint-initdb.d/
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_USER=user
ENV MYSQL_PASSWORD=password
