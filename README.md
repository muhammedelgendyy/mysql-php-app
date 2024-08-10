# MySQL-PHP Application with Docker Compose

This repository contains a simple MySQL-PHP web application, designed to practice Docker and Docker Compose skills. It includes a MySQL database, a PHP web server, and phpMyAdmin for database management.

## Prerequisites

   - [Docker](https://www.docker.com/products/docker-desktop) and [Docker Compose](https://docs.docker.com/compose/install/) must be installed on your machine.

## Repository Structure

   - `docker-compose.yml`: Defines the services (MySQL, PHP web server, and phpMyAdmin) and their configurations.
      1. **Services:**
         - `db`: Uses the mysql:5.7 image and sets up the MySQL database with the specified credentials and database name.
         - `web`: Builds the PHP web server from the Dockerfile in the backend directory, exposing it on port 80.
         - `phpmyadmin`: Uses the phpmyadmin/phpmyadmin image and sets up phpMyAdmin, exposing it on port 8080.
      2. **Volumes and Networks:**
         - `db-data`: Persistent storage for MySQL data.
         - `db-net`: Internal network for database communication.
         - `app-net`: Network for application communication between the web server and phpMyAdmin.
      
   - `backend/Dockerfile`: Defines how to build the Docker image for the PHP web server.
      - Uses the php:7.4-apache base image.
      - Copies the PHP application files into the container.
      - Installs the mysqli PHP extension required for database interaction.

   - `backend/`: Contains the PHP application files for the web server.

## Getting Started

Follow these steps to get your application up and running:

   1. **Clone the repository:**

      ```bash
      git clone https://github.com/muhammedelgendyy/mysql-php-app.git
      cd mysql-php-app
      ```

   2. **Build the application with Docker Compose:**

      ```bash
      docker compose up
      ```

   3. **Access the web application and phpMyAdmin:**

      - You can access the php application `MySQL Data Display` locally on the Docker Machine:
         (http://localhost/)
      - You can access `phpMyAdmin` locally on the Docker Machine:
         (http://localhost:8080/)

## Notes

1. Make sure to update the docker-compose.yml and Dockerfile if you need to modify the application or its configuration.
2. For additional PHP extensions or custom configurations, modify the backend/Dockerfile accordingly.