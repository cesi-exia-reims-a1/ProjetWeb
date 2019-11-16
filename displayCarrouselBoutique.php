<?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM produit WHERE Date_Evenement >= (Select Date( NOW())) LIMIT 3");
$requete->execute();?>
   

    <?php while($ligne=$requete->fetch()){ ?>
        <div class="card">
            <a class="nolink" href="infoEvenement.php?id_evenement=<?php echo $ligne['ID_Produit']?>">
            <img class="card-img-top" src=<?php echo $ligne['URL_Photo']?>>
            <div class="card-body">
                <h5 class="card-title"><?php echo $ligne['Nom_Produit']?></h5>
                <p class="card-text"><?php echo $ligne['Descriptif_Produit']?></p>
            </div>
        </div>
    <?php
    } ?></a>