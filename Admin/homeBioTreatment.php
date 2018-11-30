<?php
require "../Model/db.php";
require "../Model/biographyManager.php";


if(updateBio($_POST, $db)) {
  header("Location: home.php?success=Votre projet a bien été ajouté au portfolio");
  exit;
}
// var_dump($_POST);


 ?>
