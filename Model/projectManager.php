<?php
//Fonction qui récupère la table Project en DB
function getProject($db) {
  $query = $db->query("SELECT * FROM Project");
  $user = $query->fetchall(PDO::FETCH_ASSOC);
  return $user;
}

//Fonction qui récupère la table ! Project et Image ! en DB
function getProjects($db){
  $query = $db->query("SELECT * FROM Project INNER JOIN Image ON Project.image_id = Image.id_image");
  $stuff = $query->fetchall(PDO::FETCH_ASSOC);
  return $stuff;
}



//Fonction qui ajoute un produit en DB
function addProject($Project ,$lastID, $db) {
  $query = $db->prepare("INSERT INTO Project (Project_name, Project_description, image_id) VALUES(?, ?, ? )");
  $result = $query->execute([$Project["Project_name"],$Project["Project_description"],$lastID]);

    // "Project_name" => $Project["Project_name"] ,
    // "Project_description" => $Project["Project_description"],
    // "image_id" => $lastID
//
//   ]);
//   return $result;
}

function lastID($db){
  $query = $db->query("SELECT LAST_INSERT_ID() FROM Image");
  $stuff = $query->fetch(PDO::FETCH_ASSOC);
  return $stuff;
}



//Fonction pour modifier les valeurs d'une question en base de données
function updateProject($form, $db)
{
   $query = $db->prepare("UPDATE Project SET Project_name = :name, Project_description = :description  WHERE id_project = :id");
   $result = $query->execute([
  
       "name" => $form["name"],
       "description" => $form["description"]


   ]);
   return $result;
   $query->closeCursor();
}


 ?>
