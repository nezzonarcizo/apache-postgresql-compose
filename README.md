# apache-postgresql-compose
A simple example of a application installed on apache connecting with a postgresql db in the same networking


## Install Docker and Docker Compose 

https://docs.docker.com/get-docker/

https://docs.docker.com/compose/install/


## Running...

Just run 'docker-compose up -d' in the same directory of the docker-compose.yml file...


Test the application on http://localhost:8080/


## Rebuilding

If you need to change something on dockerfile, after that, run 'docker compose up --build -d'
