<?php

$idCentre = (isset($_SESSION['centre'])) ? ($_SESSION['centre']) : NULL;

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM evenement WHERE Date_Evenement >= (Select Date( NOW())) AND Supprime = 0 AND ID_Centre = :id_centre");
$requete->bindParam('id_centre', $idCentre, PDO::PARAM_STR);
$requete->execute();?>
   

    <?php while($ligne=$requete->fetch()){ ?>
        <div class="card">
            <a class="nolink" href="infoEvenement.php?id_evenement=<?php echo $ligne['ID_Evenement']?>">
            <img class="card-img-top" src=<?php echo $ligne['URL_Photo']?>>
            <div class="card-body">
                <h5 class="card-title"><?php echo $ligne['Nom_Evenement']?></h5>
                <p class="card-text"><?php echo $ligne['Description_Evenement']?></p>
            </div>
        </div>
    <?php
    } ?></a>