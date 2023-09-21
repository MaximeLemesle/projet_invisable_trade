<?php
require_once 'connect.php';

function create_object($nom, $description, $image, $id_users)
{
    $sql = 'insert into objet(nom,description,image,id_users)
            values(:nom,:description,:image,:id_users)';

    $statement = $GLOBALS['pdo']->prepare($sql);

    $statement->execute([
        'nom' => $nom,
        'description' => $description,
        'image' => $image,
        'id_users' => $id_users,
    ]);
}

function object_info($id)
{

    $sql = 'SELECT * FROM objet WHERE id = ' . $id;

    $query = $GLOBALS['pdo']->query($sql);

    // $query->execute();

    $info = $query->fetchAll();

    return $info;
}
