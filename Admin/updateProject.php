<?php
include "../Template/headerAdmin.php";
include "../Template/navAdmin.php";
?>


<div class="container col-7">
  <form class="" action="updateTreatment.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="formGroupExampleInput">Titre du projet</label>
      <input type="text" class="form-control"  name="name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Rajouter une image/fichier</label>
      <input type="file" class="form-control-file" name="image">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1" >Description</label>
      <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form>

</div>

<?php include "../Template/footerAdmin.php"; ?>
