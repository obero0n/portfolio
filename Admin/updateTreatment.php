<?php
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Model/projectManager.php";
require "../Model/imageManager.php";


$src = "img/" . $_FILES["image"]["name"];

  updateImage($src,$_FILES["image"]["name"],$db);

if(!empty($_POST)) {

  // On appele la function pour modif l'image


  // On appele la function pour recuperé le derniere ID
  $lastID = lastID($db) ;

 //On appelle la fonction pour modifier les valeurs du produits
 if(updateProject($_POST, $db))
 {
   header("Location: truehome.php?success=Votre projet a bien été modifié");
   exit;
 }
}
 // Et enfin on on deplace l'image dans le fichier img.
 move_uploaded_file($_FILES["image"]['tmp_name'], "../" . $src);

?>
