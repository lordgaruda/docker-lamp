# PHP-Apache-MySQL-PHPMyAdmin Docker Setup

## Overview
This repository provides a Docker Compose setup for a PHP development environment with Apache, MySQL, and PHPMyAdmin. The setup includes three services:
- **Web**: A PHP 8 + Apache container serving the web application.
- **Database (MySQL)**: A MySQL 5.7 database container.
- **PHPMyAdmin**: A web-based interface for managing the MySQL database.

## Prerequisites
Ensure you have the following installed on your system:
```sh
sudo apt install docker.io docker-compose
```

## Setup Instructions

### 1. Clone the Repository
```sh
git clone https://github.com/lordgaruda/web-containerizer.git
cd docker-lamp
```

### 2. Start the Containers
Run the following command to start all services:
```sh
sudo docker-compose up -d
```

### 3. Access the Services
- **Web Server (PHP + Apache)**: [http://<IP>:8080](http://<IP>:8080)
- **PHPMyAdmin**: [http://<IP>:8090](http://<IP>:8090)
- **MySQL Database**: Accessible on `db:3306`

## Configuration Details

### Web Server (PHP + Apache)
- Image: `php:8-apache`
- Container Name: `php-apache-container`
- Ports: `8080:80`
- Mounts the `./site` directory to `/var/www/html` in the container.

### MySQL Database
- Image: `mysql:5.7`
- Data stored in the `db_data` volume.
- Environment Variables:
  - for environment just rename file sample.env to .env

```
cp sample.env .env
```
- Ports: `3306:3306`

### PHPMyAdmin
- Image: `phpmyadmin`
- Accessible on port `8090`.
- Connects to the MySQL database.

## Stopping the Containers
To stop the running containers, use:
```sh
docker-compose down
```

## Notes
- Ensure that the `site` directory exists in your project root for PHP files.
- Modify database credentials if needed in `docker-compose.yml`.
