<p align="center"><img src="public/images/logo.png" height="128"></p>

DeviceSphere est une application web complète pour inventorier, organiser et gérer des appareils. Cette plateforme offre des fonctionnalités avancées pour simplifier la gestion des équipements. Ce projet a été réalisé dans un cadre personnel.

## Fonctionnalités principales

### Gestion des appareils

- Affichez une liste complète des appareils
- Effectuez des recherches spécifiques et appliquez des filtres pour organiser vos données
- Trier selon différents critères comme la marque, le système d'exploitation, le statut de prêt, et bien plus
- Obtenez les informations des composants et de modifications avancées

### Base de données détaillée

- Contient des informations sur les marques, systèmes d'exploitation, statut de prêt, numéros de série, dates d'ajout, images, etc

### Système de prêt

- Suivez les appareils prêtés à des personnes
- Ajoutez des informations comme le moyen de contact, la date de début et de fin du prêt
- Indiquez le statut des prêts en cours

### Système de réparation

- Notez des défaillances matérielles ou logiciels sur un appareil spécifique
- Listez tous les appareils ayant besoin d'une réparation

## Installation

### Clonez le dépôt

````bash
git clone https://github.com/enioaiello/devicesphere.git
````

### Installez les dépendances

````bash
composer install
npm install
````

### Copiez le fichier d'environnement

````bash
cp .env.example .env
php artisan key:generate
vim .env
````

### Démarrez Docker

````bash
docker-compose up -d --build
````

### Effectuez les migrations

````bash
docker exec laravel_app php artisan migrate
````
