<?php
require_once 'connect.php';

function create_object($nom, $description, $image, $id_users)
{
    //Requête SQL
    $sql = 'insert into objet(nom,description,image,id_users)
            values(:nom,:description,:image,:id_users)';

    //Préparation de la requête
    $statement = $GLOBALS['pdo']->prepare($sql);

    //Exécution de la Requête
    $statement->execute([
        'nom' => $nom,
        'description' => $description,
        'image' => $image,
        'id_users' => $id_users,
    ]);

    //On retourne le dernier 'id' insérer dans la bdd, cela sert a lier l'objet lors de la création de l'enchère. 
    return $GLOBALS['pdo']->lastInsertId();

}



function object_info($id)
{
    //Requête SQL
    $sql = 'SELECT * FROM objet WHERE id = ' . $id;
    //Exécution de la Requête
    $query = $GLOBALS['pdo']->query($sql);
    //Récupération du résultat
    $info = $query->fetchAll();
    //Renvoie des données
    return $info;
}
