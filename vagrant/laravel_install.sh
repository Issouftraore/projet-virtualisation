#!/bin/bash

# Met à jour les paquets et les dépendances
sudo apt-get update && sudo apt-get upgrade -y
sudo apt-get install apache2

# Installation de PHP et de COMPOSER
 sudo apt-get install -y php php-mbstring php-xml php-bcmath php-tokenizer php-json php-zip unzip curl php-mysql
curl -sL https://getcomposer.org/installer | sudo php
sudo mv composer.phar /usr/local/bin/composer

# Deplacement dans le dossier de notre application Laravel
cd /var/www/html/backend
composer install
# Démarrer le serveur Laravel
php artisan serve --host=0.0.0.0 --port=8000

