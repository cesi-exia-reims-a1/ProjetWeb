<?php

$idEvent = $_GET['id_evenement'];
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM photo WHERE ID_Evenement = :id_evenement");
$requete->bindValue(':id_evenement', $idEvent, PDO::PARAM_STR);
$requete->execute();
   

while($ligne=$requete->fetch()){ ?>
        <div class="card">
            <a class="nolink" href="photo.php?id_evenement=<?php echo $ligne['ID_Evenement']?>">
            <img class="card-img-top" src=<?php echo $ligne['URL_Photo']?>>
        </div>
    <?php
    } ?>