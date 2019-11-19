<?php

$idProduct = $_GET['id_produit'];

include('bdd.php');

$requete = $bdd->prepare("SELECT * FROM produit WHERE ID_Produit = :id_produit");
$requete->bindValue(':id_produit', $idProduct, PDO::PARAM_STR);
$requete->execute();  
$ligne=$requete->fetch();
$requete->closeCursor(); 
?>