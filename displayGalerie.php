<?php


$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT URL_Photo FROM photo");
$requete->execute();
   

while($ligne=$requete->fetch()){ ?>
        <div class="card">
            <img class="card-img-top" src=<?php echo $ligne['URL_Photo']?>>
        </div>
    <?php
    } ?></a>