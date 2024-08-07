#!/bin/bash

# Met à jour les paquets et les dépendances
sudo apt-get update && sudo apt-get upgrade -y
sudo apt-get install apache2

# Ajoute le dépôt NodeSource pour installer Node.js 18.x
curl -sL https://deb.nodesource.com/setup_18.x | sudo -E bash -

# Installe Node.js et npm
sudo apt-get install -y nodejs


# Vérifie si le clonage s'est bien déroulé avant de continuer
if [ -d "/var/www/html/frontend" ]; then
  cd /var/www/html/frontend

  # Installe les dépendances npm
  npm install

  # Lance le serveur de développement Next.js
  npm run dev
else
  echo "Le clonage du dépôt a échoué, le répertoire /var/www/html/my-nextjs-app n'existe pas."
  exit 1
fi
