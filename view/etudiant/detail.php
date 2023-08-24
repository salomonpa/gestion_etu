<?php 

session_start();
$user=$_SESSION["user"];

require_once ("../../base.php");
require_once ("../../autoload.php");

$bd= bd();
$etudiantCon =new etudiantControle($bd);
$etud=new etudiant($_POST);
$etudianCon->liste($etud);

if(isset($_GET['idetudiant']))
{
    $idetudiant=$_GET['idetudiant'];
    $value=$etudiantCon->get($idetudiant);
}
?>

<!DOCTYPE html>
<html lang="fr">
<?php
  include('../../include/head.php');
?>
<body>

    <div class="container" id="container">
        <?php
             include('../../include/header.php');
        ?>

    <div class="mt-3 pull-right d-flex">  
        <i class="fa fa-user mr-3 user"> <span class="ml-2"> <?= $user["statut"];?> </span> </i>
        <button class="btn btn-info"> <a class="text-light" href="../../index.php"> Deconnexion </a> </button>
    </div>
        
        <div class="bienvenu">DETAIL DES ETUDIANTS N°: <?= $value->idetudiant?></div>
      <div class="global-content">
        <div class="contenu">
        <?php
             include('../../include/aside.php');
        ?>

        </div>
            <div class="cache">
                <div class="c-table">

            <div class=" form p-4 d-flex flex-column w-100">
                <p class="detail"><span class="t-gauche mr-5"> nom</span> <span class="t-droit"><?= $value->Nom?> </span> </p>
                <p class="detail"><span class="t-gauche mr-5"> prenom</span> <span class="t-droit"><?= $value->Prenom?></span></p>
                <p class="detail"><span class="t-gauche mr-5"> date_n</span> <span class="t-droit"><?= $value-> date_n?></span></p>
                <p class="detail"><span class="t-gauche mr-5"> nationalite</span> <span class="t-droit"><?= $value-> nationali?></span></p>             
                <p class="detail"><span class="t-gauche mr-5"> adresse</span> <span class="t-droit"><?= $value-> adresse?></span></p>
                <p class="detail"><span class="t-gauche mr-5"> email</span> <span class="t-droit"><?= $value-> email?></span></p>
                <p class="detail"><span class="t-gauche mr-5"> telephone</span> <span class="t-droit"><?= $value-> tel?></span></p>
            </div>
            <button type="button" class="btn btn-info pull-left mb-3 ml-4"> <a class="text-light" href="list.php"> Fermer <i class="fa fa-close"></i> </a></button>
                </div>
            </div>
      </div>
        <?php
             include('../../include/footer.php');
        ?>
    </div>
    
</body>
</html>
