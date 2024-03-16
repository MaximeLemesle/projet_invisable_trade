# Invisable Trade

## À propos

Invisable Trade est une plateforme de vente aux enchères d'articles invisible, "L'art des enchères invisibles : faites confiance à votre cœur, pas à vos yeux." Ce projet à vue le jour lors d'une semaine de "Crazy Dev" où l'objectif était de créer un projet irréaliste avec un certain nombre de contraintes.


## Table des matières

- 🪧 [À propos](#à-propos)
- 📦 [Lien du site](#lien-du-site)
- 🚀 [Installation](#installation)
- 🤝 [Contribution](#contribution)
- 🏗️ [Langages & Frameworks](#langages--frameworks)


## Lien du site

[Invisable Trade](http://crazydev.tomy-sackebandt.mds-angers.yt/php/accueil.php)


## Installation

### BDD
Le script pour générer la base de données se trouve dans `init.sql`, Le fichier est composé de 2 parties, pour séparer la syntaxe POSTGRESQL et MYSQL.
Les informations pour se connecter à la base de données, doivent être modifiées dans `config.php` qui se trouve dans le dossier `php/bdd`.

### Changement par rapport à la bdd
Si on utiliser POSTGRESQL:
  - Changer la ligne 8 de `php/bdd/connect.php` pour avoir: `$dsn = "pgsql:host=$host;port=5432;dbname=$db;";`

Si on utiliser MYSQL:
  - Changer la ligne 8 de `php/bdd/connect.php` pour avoir: `$dsn = "mysql:host=$host;port=5432;dbname=$db;";`
  
> Il faut aussi faire attention au nom des tables dans les requêtes SQL. <br>
> Les requêtes se trouvent dans les fichiers `objet.php` et `enchere.php`. <br>
> Il faut faire attention lors de la création d'une enchère, que la table users n'est pas vide.


## Contribution

Réaliser par [*Tomy*](https://github.com/TomySackebandt) et [*Maxime*](https://github.com/MaximeLemesle)


## Langages & Frameworks

<img src="https://img.shields.io/badge/Code-PHP-777BB4?style=flat&logo=php&logoColor=white" />
<img src="https://img.shields.io/badge/Style-CSS-blue?style=flat&logo=css3&logoColor=white" />
<img src="https://img.shields.io/badge/Database-MySQL-FFA500?style=flat&logo=mysql&logoColor=white" />
<img src="https://img.shields.io/badge/Database-PostgreSQL-336791?style=flat&logo=postgresql&logoColor=white" />
