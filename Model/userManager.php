<?php
//Fonction qui récupère un seul utilisateur en DB
function getUser($db) {
  $query = $db->query("SELECT * FROM User");
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}
 ?>
