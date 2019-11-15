<?php

$idEvent = $_GET['id_photo'];
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT URL_Photo FROM photo WHERE ID_Photo = :id_photo");
$requete->bindValue(':id_photo', $idEvent, PDO::PARAM_STR);
$requete->execute();
   

while($ligne=$requete->fetch()){ ?>
<div class="card">
    <div class="card mb-3">
        <img class="card-img-top" src=<?php echo $ligne['URL_Photo']?> alt="photo">
    </div>
</div>
<?php
    } ?>