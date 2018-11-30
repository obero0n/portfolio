<?php
//Fonction qui récupère la bio en DB
function getBio($db) {
  $query = $db->query("SELECT * FROM Biography");
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}


function updateBio($bio, $db) {
  $query = $db->prepare("UPDATE Biography SET Biography_text = :Biography_text");
  $result = $query->execute([
    "Biography_text" => $bio["Biography_text"]
  ]);
  return $result;
}


 ?>


 <!-- Bonjour, je m'appelle Simon,
 je suis developpeur web Jr.
 Passionnée par les nouvelles technologies,le développement web me permet d'exprimer ma créativité.
 J'aime travailler sur des projets variés : de l'intégration de sites vitrines HTML/CSS
 , au développement de sites dynamiques avec Php et Javascript.
 Une polyvalence que je detiens grace à un parcours professionnel de graphiste en entreprise riche en expériences. -->
