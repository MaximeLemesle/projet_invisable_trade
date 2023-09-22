<?php

require_once 'connect.php';

function list_enchere()
{
    //Requête SQL
    $sql = 'SELECT * FROM Enchere';
    //Exécution de la Requête
    $query = $GLOBALS['pdo']->query($sql);
    //Récupération du résultat
    $list = $query->fetchAll();
    //Renvoie des données
    return $list;
}

function create_enchere($date_debut, $date_fin, $prix, $id_users, $nom, $description, $image)
{
    //Appel du fichier objet.php, cela sert pour la création de l'objet lié à l'enchère.
    require 'objet.php';
    $id_objet = create_object($nom, $description, $image, 1);//Création de l'objet

    //Requête SQL
    $sql = 'INSERT INTO Enchere(date_debut,date_fin,prix_actuel,prix_initial,id_objet, id_users)
            VALUES(:date_debut, :date_fin, :prix_actuel, :prix_initial, :id_objet, :id_users)';

    //Préparation de la requête
    $statement = $GLOBALS['pdo']->prepare($sql);
    //Exécution de la Requête
    $statement->execute([
        'date_debut' => $date_debut,
        'date_fin' => $date_fin,
        'prix_actuel' => $prix,
        'prix_initial' => $prix,
        'id_objet' => $id_objet,
        'id_users' => $id_users
    ]);
}

function info_enchere($id_enchere)
{
    //Requête SQL
    $sql = 'SELECT * FROM Enchere WHERE id = ' . $id_enchere;
    //Exécution de la Requête
    $query = $GLOBALS['pdo']->query($sql);
    //Récupération du résultat
    $info = $query->fetchAll();
    //Renvoie des données
    return $info;
}