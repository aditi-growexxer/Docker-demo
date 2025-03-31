# Docker-demo
Build and Run the Docker Container
docker build -t my-php-app .
docker run -p 8080:80 my-php-app
http://localhost:8080/


Stop and Remove the Container
docker container prune

If there is an issue, recreate the database:

docker-compose down -v
docker-compose up -d

docker ps


Verify MySQL Connection:

docker exec -it php_app bash
php -r 'new PDO("mysql:host=mysql;dbname=crud_db", "user", "password"); echo "Connected successfully!";'



Make sure PHP and MySQL containers are running (docker ps)
Use mysql as the hostname in config.php
Check logs if MySQL fails to start (docker logs mysql_db)
Rebuild everything (docker-compose down -v && docker-compose up --build -d)
Ensure MySQL is on the same network (docker network inspect php-docker-demo_default)
