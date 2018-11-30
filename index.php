<?php
include "Template/nav.php";
include "Template/header.php";
include "Template/bubble.php";

// require "../Model/db.php";
require "Model/db.php";

require "Model/projectManager.php";
// require "Service/sessionManager.php";
require "Service/formChecker.php";

$Projects = getProjects($db);
?>

  <h3 id="Travaux" class="fontcolor"><span>T</span>ravaux</h3>
  <div id="articleBox" class="">

<?php foreach ($Projects as $key => $value) { ?>

    <article class="flex column">
      <img class="hiddenImg" src="<?php echo $value["image_src"]; ?>" alt=""/>
      <div class="flex column centerC">
        <h4><?php echo $value["Project_name"]; ?></h4>
        <!-- <i class="fab fa-github fa-3x"></i>
        <a class="centerT" href="https://github.com/obero0n/terre-de-geek">Github</a> -->
        <p class="centerT">
          <?php echo $value["Project_description"]; ?>
        </p>
      </div>
    </article>

<?php } ?>

    <!-- <article class="flex column">
      <img class="hiddenImg" src="img/twitterPage.png" alt=""/>
      <div class="flex column centerC">
        <h4>Twitter main Page</h4>
        <i class="fab fa-github fa-3x"></i>
        <a class="centerT" href="https://github.com/obero0n/page-twitter">Github</a>
        <p class="centerT">
          Reproduction de la page d’acceuil du r&eacute;seau social favori des d&eacute;veloppeur : Twitter.


        </p>
      </div>
    </article>
    <article class="flex column">
      <img class="hiddenImg" src="img/oceaClub.png" alt=""/>
      <div class="flex column centerC">
        <h4>Ocean Club</h4>
        <i class="fab fa-github fa-3x"></i>
        <a class="centerT" href="https://github.com/obero0n/Ocea">Github</a>
        <p class="centerT">
          Reproduction du site de sport ocea : http://www.oceaclub.com/.
        </p>
      </div>
    </article> -->
  </div>



<!-- End "Travaux" section-->
<?php include "Template/bubble.php"; ?>
<!-- Start "Graphique" section"-->
<h3 id="Graphique" class="fontcolor centerT"><span>G</span>raphique</h3>
<article class="flex column">
  <i> <a href="#">lien?(deviant art/pinterst)</a> </i>
  <!-- <img src="" alt=""> -->
  <div class="flex column centerC">
    <h4>titre du texte</h4>
    <p class="centerT">Altera sententia est, quae definit amicitiam paribus officiis ac voluntatibus.
       Hoc quidem est nimis exigue et exiliter ad calculos vocare amicitiam, ut par sit ratio acceptorum et datorum.
       Divitior mihi et affluentior videtur esse vera amicitia nec observare restricte, ne plus reddat quam acceperit;
       neque enim verendum est, ne quid excidat, aut ne quid in terram defluat, aut ne plus aequo quid in amicitiam congeratur.</p>
  </div>
</article>
<?php include "Template/bubble.php"; ?>
<!-- End "Graphique" section"-->
                                                          <!-- start CV section -->
<div id="cv" class="centerT">
<h3 id="cvSection" class="fontcolor centerT"><span>C</span>.V</h3>
<section>
  <article class="flex column centerC">
    <h4>Savoirs</h4>
    <p>Connaissance des arts graphiques, des typographies, couleurs et de leurs normalisation (code typographique ...).
    Connaissance de l'outil informatique, des palettes graphiques et des principaux logiciels de graphisme et de mise en page.
  Connaisance des langague CSS , html et base en php javascirpt.
Savoir travailler dans l'urgence,anticiper les besoins, s'adapter.
Savoir g&eacute;rer les délais de réalisations,la relation client.</p>
  </article>
  <article class="flex column centerC">
    <h4>Formation</h4>
    <ul class="centerT">
      <li><span>BTS (Alternance)</span><br>
          Graphiste-Concepteur en Communication Multicanal CEPRECO<br>
          Roubaix (59)
      </li>
      <li><span>UFR LLCE Langues,</span><br>
          Litt&eacute;ratures et Civilisations &eacute;trang&egrave;res Lille 3,<br>
          Villeneuve-dAscq (59)
      </li>
      <li><span>BACCALAUR&Eacute;AT Professionnel, Artisanat et M&eacute;tiers d’art,</span><br>
          Option Communication graphique<br>
          Lyc&eacute;e Le corbusier,<br>
          Tourcoing (59)
      </li>
      <li><span>CAP Dessinateur d’&eacute;x&eacute;cution en communication graphique</span><br>
        Lyc&eacute;e LE CORBUSIER<br>
        Tourcoing (59)
      </li>
    </ul>
  </article>
</section>
<h4>Expérience</h4>
<section id="cvExp">

  <article class="flex column centerC">
    <h5>Alpha pub</h5>
    <h6>&Eacute;x&eacute;cution en communication graphique</h6>
    <p>
                      Stage<br>
                      2 mois<br>
                      Neuville en Ferrain (59)<br>
                      - Conception de flyers, r&eacute;alisation d’une banni&egrave;re publicitaire.<br>
                      - Cr&eacute;ation de logos.<br>
                      - D&eacute;coupe et pose d’adh&eacute;sifs d&eacute;cors v&eacute;hicules, vitrines total covering.
    </p>
  </article>
  <article class="flex column centerC">
    <h5>Coop&eacute;ration avec un free-lance (Joneskind)</h5>
    <h6>Communication graphique et web-design</h6>
    <p>
                      Stage<br>
                      2 mois<br>
                      Tourcoing (59)<br>
                      - R&eacute;alisation d’une arborescence et les trames des pages Web.<br>
                      - Cr&eacute;er une identit&eacute; visuelle, une maquette et la charte graphique du site. - Choisir les technologies et la typologie des m&eacute;dias.<br>
                      - Mettre en oeuvre la r&eacute;alisation technique.

    </p>
  </article>
  <article class="flex column centerC">
    <h5>Pubos</h5>
    <h6>Graphiste</h6>
    <p>
                  Alternance 1 ans<br>
                  - Fabrication de maquette BAT.<br>
                  - &Eacute;change avec les clients (comprendre leurs besoins)<br>
                  - Fabrication de films pour l’impression num&eacute;rique/s&eacute;rigraphique. - Suivie de la commande du BAT.

    </p>
  </article>
  <article class="flex column centerC">
    <h5>Cora</h5>
    <h6>Cr&eacute;ation en Communication graphique</h6>
    <p>
              stage 4 mois<br>
              Wattignies (59)<br>
              - cr&eacute;ation et r&eacute;alisation de logotype, brochure, d&eacute;pliant publicitaire, conception d’un catalogue d’enseigne,
              de brochure.<br>
              - am&eacute;nagement et vitrine .

    </p>
  </article>
</section>
</div>
<!-- End CV section -->
<?php include "Template/bubble.php"; ?>
<!-- Start form mail to -->

<div class="">
  <form class="flex column" action=".php" method="post">
    <div class="formgroup">
      <label for="">First name</label>
      <input type="text" name="First_name" value="">
    </div>
    <div class="formgroup">
      <label for="">Password</label>
      <input type="text" name="Password" value="">
    </div>
    <div class="formgroup">
      <input type="submit" name="" value="OK">
    </div>
  </form>
</div>

<!-- End form mail to -->

<?php include "Template/footer.php"; ?>
