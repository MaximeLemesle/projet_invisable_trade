<?php

require_once 'connect.php';

function list_enchere()
{
    //Requête SQL
    $sql = 'SELECT * FROM enchere';
    //Exécution de la Requête
    $query = $GLOBALS['pdo']->query($sql);
    //Récuperation 
    $list = $query->fetchAll();

    return $list;
}

function create_enchere($date_debut, $date_fin, $prix, $id_users, $nom, $description, $image)
{
    require 'objet.php';

    $id_objet = create_object($nom, $description, $image, 1);
    
    //Requête SQL
    $sql = 'insert into enchere(date_debut,date_fin,prix_actuel,prix_initial,id_objet, id_users)
            values(:date_debut, :date_fin, :prix_actuel, :prix_initial, :id_objet, :id_users)';

    $statement = $GLOBALS['pdo']->prepare($sql);

    $statement->execute([
        'date_debut' => $date_debut,
        'date_fin' => $date_fin,
        'prix_actuel' => $prix,
        'prix_initial' => $prix,
        'id_objet' => $id_objet,
        'id_users' => $id_users
    ]);

    
}
