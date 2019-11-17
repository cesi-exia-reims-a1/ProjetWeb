<?php

$idEvent = $_GET['id_evenement'];
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM photo WHERE ID_Evenement = :id_evenement AND Supprime = 0");
$requete->bindValue(':id_evenement', $idEvent, PDO::PARAM_STR);
$requete->execute();
   

while($ligne=$requete->fetch()){ ?>
<div class="col-md-3">
    <div class="card mb-3">
        <a class="nolink" href="photo.php?id_photo=<?php echo $ligne['ID_Photo']?>">
        <img class="card-img-top" src=<?php echo $ligne['URL_Photo']?>>
    </div>
</div>
<?php
    } ?>