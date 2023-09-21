<?php

require_once './bdd/enchere.php';

$nom = $_POST['titre'];
$description = $_POST['desc'];
$image = $_FILES["img"]['name'];
$date_debut = $_POST['date-début'];
$date_fin = $_POST['date-fin'];
$prix = $_POST['prix'];
$id_user = 1;


$target_dir = "./images/";
$target_file = "./images/" . basename($_FILES["img"]["name"]);
$uploadOk = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // // To check whether directory exist or not
    if (!empty($target_dir)) {
        if (!is_dir($target_dir)) {
            mkdir($target_dir);
            $uploadOk = 1;
        }
    } else {
        echo "Specify the directory name...";
        $uploadOk = 0;
        exit;
    }

    // Check if file was uploaded without errors
    if (
        isset($_FILES["img"]) &&
        $_FILES["img"]["error"] == 0
    ) {
        $allowed_ext = array(
            "jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "gif" => "image/gif",
            "png" => "image/png"
        );
        $file_name = $_FILES["img"]["name"];
        $file_type = $_FILES["img"]["type"];
        $file_size = $_FILES["img"]["size"];

        // Verify file extension
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);

        if (!array_key_exists($ext, $allowed_ext)) {
            die("Error: Please select a valid file format.");
        }

        // Verify file size - 2MB max
        $maxsize = 2 * 1024 * 1024;

        if ($file_size > $maxsize) {
            die("Error: File size is larger than the allowed limit.");
        }

        // Verify MYME type of the file
        if (in_array($file_type, $allowed_ext)) {
            // Check whether file exists before uploading it
            if (file_exists("upload/" . $_FILES["img"]["name"])) {
                echo $_FILES["img"]["name"] . " is already exists.";
            } else {
                if (move_uploaded_file(
                    $_FILES["img"]["tmp_name"],
                    $target_file
                )) {
                    echo "The file " .  $_FILES["img"]["name"] .
                        " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "Error: Please try again.";
        }
    } else {
        echo "Error: " . $_FILES["img"]["error"];
    }
}

create_enchere($date_debut, $date_fin, $prix, $id_user, $nom, $description, $image);

?>