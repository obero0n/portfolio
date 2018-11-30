<?php
//Connection to the db portfolio
try {
  $db = new PDO("mysql:host=localhost;dbname=portfolio", "root", "root");
}
//if we return error
catch (Exception $e) {
  echo 'Exception reçue : ' .  $e->getMessage() . "\n";
}


 ?>
