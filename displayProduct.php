 <?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete = $bdd->prepare("SELECT * FROM produit");
    $requete->execute();
    $ligne=$requete->fetch()

?>