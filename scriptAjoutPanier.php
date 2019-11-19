<?php

session_start();

$idPersonne = $_SESSION['id'];
$idProduct = $_GET['id_produit'];
$nombre = $_POST['Nombre_Article'];

include('bdd.php');

$requete = $bdd->prepare("INSERT INTO panier VALUES (:id_produit, :id_personne, :nombre_article)");
$requete->bindValue(':id_produit', $idProduct, PDO::PARAM_STR);
$requete->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete->bindValue(':nombre_article', $nombre, PDO::PARAM_STR);
$requete->execute();  

header('Location: boutique.php');
exit();
$requete->closeCursor(); 
?>