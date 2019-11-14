<?php
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM centre");
$requete->execute();  

while($ligne=$requete->fetch()){ ?>
    <option value= <?php echo $ligne['ID_Centre']?>> <?php echo $ligne['Nom_Centre']?> </option>
    <?php
    } ?>