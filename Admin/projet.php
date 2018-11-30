
<?php
require "../Model/db.php";
require "../Model/projectManager.php";
include "../Template/headerAdmin.php";
include "../Template/navAdmin.php";


$Projects = getProjects($db);

?>



<div class="container pt-3 pb-3">
   <div class="col-12">
       <h2 class="text-center">Mes expériences <a class="btn btn-success btn-sm" href="addProject.php" role="button">Ajouter une expérience</a></h2>
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

                   <td>
                       <a href="updateProject.php?id=<?php echo $result["id_project"]; ?>"><i class="fas fa-edit fa-2x"></i></a>
                       <a href="delExperiences.php?id=<?php echo $result["id_project"]; ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                   </td>
               </tr>
               <?php
           }
           ?>
           </tbody>
       </table>
   </div>
</div>


<?php include "../Template/footerAdmin.php"; ?>
