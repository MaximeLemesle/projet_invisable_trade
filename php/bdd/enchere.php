<?php

require_once 'connect.php';

function list_enchere()
{
    // $pdo = require_once 'connect.php';

    $sql = 'SELECT * FROM enchere';

    $query = $GLOBALS['pdo']->query($sql);

    $list = $query->fetchAll();

    return $list;
}

function create_enchere($date_debut, $date_fin, $prix_actuel, $prix_initial, $id_objet, $id_user)
{


    $sql = 'insert into enchere(date_debut,date_fin,prix_actuel,prix_initial,id_objet, id_user)
            values(:date_debut, :date_fin, :prix_actuel, :prix_initial, :id_objet, :id_user)';

    $statement = $GLOBALS['pdo']->prepare($sql);

    $statement->execute([
        'date_debut' => $date_debut,
        'date_fin' => $date_fin,
        'prix_actuel' => $prix_actuel,
        'prix_initial' => $prix_initial,
        'id_objet' => $id_objet,
        'id_user' => $id_user
    ]);

    echo "ok";
}
