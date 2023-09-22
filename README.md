# Invisable_Trade

## [Lien du site](http://crazydev.tomy-sackebandt.mds-angers.yt/php/accueil.php)

## BDD
Le script pour générer la base de données se trouve dans `init.sql`, Le fichier est composé en 2 partie, pour séparer la syntaxe POSTGRESQL et MYSQL.

Les informations pour se connecter à la base de données, doivent être modifiées dans `config.php` qui se trouve dans le dossier `php/bdd`.

### Changement par rapport au bdd
Si on utiliser POSTGRESQL:
- Changer la ligne 8 de `php/bdd/connect.php` pour avoir: `$dsn = "pgsql:host=$host;port=5432;dbname=$db;";`

Si on utiliser MYSQL:
- Changer la ligne 8 de `php/bdd/connect.php` pour avoir: `$dsn = "mysql:host=$host;port=5432;dbname=$db;";`

> Il faut aussi faire attention au nom des tables dans les requêtes SQL.
> Les requêtes se trouvent dans les fichiers `objet.php` et `enchere.php`.

Il faut faire attention lors de la création d'une enchère, que la table users n'est pas vide.