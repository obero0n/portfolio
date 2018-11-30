<?php
//On charge les fichiers dont on a besoin
require "../Model/db.php";
require "../Model/userManager.php";
require "../Service/formChecker.php";

// Ici on stock les variables POST du form Admin
$name = $_POST["First_name"];
$password = $_POST["Password"];

$user = getUser($db);

if ($name === $user["First_name"] && $password === $user["Password"]) {
  header("Location:home.php");
}
else {
  echo "ko";
}


 ?>
