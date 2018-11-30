<?php

include "../Template/headerAdmin.php";
?>

<div class="container  d-flex align-center">
  <form action="loginAdmin.php" class="col-6" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">First name</label>
      <input type="text" class="form-control" name="First_name" placeholder="First name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="Password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>




<?php include "../Template/footerAdmin.php"; ?>
