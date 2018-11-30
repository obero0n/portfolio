<?php

function addImage($src,$name,$db){
  $query = $db->prepare("INSERT INTO Image (image_name,image_src) VALUES (? , ?)");
  $query->execute([$name,$src]);


}

function updateImage($src,$name,$db){
  $query = $db->prepare("UPDATE Image (image_name,image_src) VALUES (? , ?)");
  $query->execute([$name,$src]);


}

 ?>
 <!-- $query = $db->prepare("UPDATE Project SET id_project = :id, Project_name = :name, Project_description = :description image_id = image WHERE id = :id");
 $result = $query->execute([
     "id_project" => $form["id"],
     "Project_name" => $form["name"],
     "description" => $form["description"],
     "image_id" => $form["image"] -->
