<?php
include('bdd.php');

$requete = $bdd->prepare("SELECT * FROM centre");
$requete->execute();  

while($ligne=$requete->fetch()){ ?>
    <option value= <?php echo $ligne['ID_Centre']?>> <?php echo $ligne['Nom_Centre']?> </option>
    <?php
    } ?>