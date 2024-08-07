#!/bin/bash
# Mettre à jour les packages
sudo apt-get update && sudo apt-get upgrade -y
sudo apt-get install apache2

# Installer MySQL
sudo apt-get install -y mysql-server

# Démarrer MySQL
sudo systemctl start mysql

# Activer MySQL au démarrage
sudo systemctl enable mysql
# demarrer MYSQL
sudo systemctl start mysql

# Configuration de MySQL
sudo mysql -e "CREATE USER 'vagrant'@'%' IDENTIFIED BY 'root';"
sudo mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'vagrant'@'%' WITH GRANT OPTION;"
sudo mysql -e "FLUSH PRIVILEGES;"
sudo mysql -e "CREATE DATABASE vm;"
