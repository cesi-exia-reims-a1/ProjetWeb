<?php

$idProduct = $_GET['id_produit'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete = $bdd->prepare("SELECT * FROM produit WHERE ID_Produit = :id_produit");
    $requete->bindValue(':id_produit', $idProduct, PDO::PARAM_STR);
    $requete->execute();  
    $ligne=$requete->fetch();
    $requete->closeCursor(); 
?>