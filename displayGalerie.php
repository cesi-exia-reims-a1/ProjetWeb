<?php


include('bdd.php');
$ID_Centre = $_SESSION['centre'];
$requete = $bdd->prepare("SELECT p.URL_Photo, e.ID_Centre FROM photo p JOIN evenement e ON e.ID_Evenement = p.ID_Evenement WHERE e.ID_Centre = :id_centre");
$requete->bindValue(':id_centre', $ID_Centre, PDO::PARAM_STR);
$requete->execute();
   

while($ligne=$requete->fetch()){ ?>
        <div class="card  p-2">
            <img class="card-img-top" src=<?php echo $ligne['URL_Photo']?>>
        </div>
    <?php
    } ?></a>