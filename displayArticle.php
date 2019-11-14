<?php

$idProduct = $_POST[$ligne['ID_Produit']];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete = $bdd->prepare("SELECT * FROM produit ");
    $requete->execute();  
?>