
<?php
require "../Model/db.php";
require "../Model/projectManager.php";
include "../Template/headerAdmin.php";
include "../Template/navAdmin.php";


$Projects = getProjects($db);

?>



<div class="container pt-3 pb-3">
   <div class="col-12">
       <table class="table">
           <thead>
               <tr>
                   <th scope="col">ID</th>
                   <th scope="col">Name</th>
                   <th scope="col">Description</th>
                   <!-- <th scope="col">GitHub</th>
                   <th scope="col">GitHub Page</th> -->
                   <th scope="col">Options</th>
               </tr>
           </thead>
           <tbody>
           <?php
           //On boucle pour afficher tous les produits contenus dans la variable products
           foreach ($Projects as $key => $result)
           {
               ?>
               <tr>
                   <th scope="row"><?php echo $result["id_project"]; ?></th>
                   <td><?php echo $result["Project_name"]; ?></td>
                   <td><?php echo $result["Project_description"]; ?></td>

               </tr>
               <?php
           }
           ?>
           </tbody>
       </table>
   </div>
</div>


<?php include "../Template/footerAdmin.php"; ?>
