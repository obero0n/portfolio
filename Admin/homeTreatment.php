<?php
require "../Model/db.php";
require "../Model/projectManager.php";
require "../Model/imageManager.php";


// Ici on met le chemin de l'image
$src = "img/" . $_FILES["Project_image"]["name"];

// On appele la function pour recuperé l'image
addImage($src,$_FILES["Project_image"]["name"],$db);

// On appele la function pour recuperé le derniere ID
$lastID = lastID($db) ;

// Puis on appele la function pour ajouter le projet
addProject($_POST ,$lastID["LAST_INSERT_ID()"], $db);
// Et enfin on on deplace l'image dans le fichier img.
move_uploaded_file($_FILES["Project_image"]['tmp_name'], "../" . $src);
header("location truehome.php");


 ?>
