<?php
require "../Model/db.php";
require "../Model/projectManager.php";
require "../Model/imageManager.php";

// $projectName = $_POST["Project_name"]
// $projectDescription = $_POST["Project_description"]

  //On sécurise les entrées du formulaire et on transforme en integer ce qui doit l'être pour la DB
// foreach ($_POST as $key => $value) {
//   $_POST[$key] = htmlspecialchars($value);
//   if($key === "Project_name" || $key === "Project_description") {
//     $_POST[$key] = intval($value);
//   }
// }

// if(addProject($_POST, $db)) {
//   header("Location: home.php?success=Votre projet a bien été ajouté au portfolio");
//   exit;
// }

$src = "img/" . $_FILES["Project_image"]["name"];
addImage($src,$_FILES["Project_image"]["name"],$db);

$lastID = lastID($db) ;

addProject($_POST ,$lastID["LAST_INSERT_ID()"], $db);
move_uploaded_file($_FILES["Project_image"]['tmp_name'], "../" . $src);

 ?>
