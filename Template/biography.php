<?php
require "Model/db.php";
require "Model/biographyManager.php";

$biography = getBio($db);

 ?>


<h2 class="fontcolor centerT">développeur Jr / Graphiste Illustrateur</h2>

<p class="centerT">
  <?php echo $biography["Biography_text"];  ?>
</p>





<!-- <p class="centerT">Bonjour, je m'appelle <span>Simon</span>,<br>
je suis developpeur web Jr.<br>
Passionnée par les nouvelles technologies,le développement web me permet d'exprimer ma <span>créativité</span>.<br>
J'aime travailler sur des projets variés : de l'intégration de sites vitrines <span>HTML/CSS</span><br>
, au développement de sites dynamiques avec <span>Php</span> et <span>Javascript</span>.<br>
Une <span>polyvalence</span> que je detiens grace à un <span>parcours professionnel de graphiste en entreprise</span> riche en expériences.
</p> -->
