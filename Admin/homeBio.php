<?php
include "../Template/headerAdmin.php";
include "../Template/navAdmin.php";

?>

<div class="container col-7">
  <form class="" action="homeBioTreatment.php" method="post">
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description</label>
      <textarea class="form-control" name="Biography_text" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form>

</div>

<?php include "../Template/footerAdmin.php"; ?>
