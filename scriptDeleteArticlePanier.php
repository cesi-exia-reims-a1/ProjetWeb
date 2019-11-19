<?php
session_start();
$id_produit = $_GET['id_produit'];
$id_personne = $_SESSION['id'];

include('bdd.php');

$requete = $bdd->prepare("DELETE FROM panier WHERE (ID_Produit = :id_produit AND ID_Personne = :id_personne)"); 
$requete->bindValue(':id_produit', $id_produit, PDO::PARAM_STR); 
$requete->bindValue(':id_personne', $id_personne, PDO::PARAM_STR); 
$requete->execute(); 

header('Location: panier.php');
exit();
$requete->closeCursor(); 
?>