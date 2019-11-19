<?php
// Adapter dbname et mot de passe si besoin 
include('bdd.php');
 // Récupération des données utilisateurs 

$idProduct = $_POST['id_produit'];

$requete = $bdd->prepare("UPDATE produit SET Supprime = 1  WHERE ID_Produit = :ID_Produit "); 
$requete->bindValue(':ID_Produit', $idProduct, PDO::PARAM_STR); 
$requete->execute();
header('Location: admin.php');
exit();

$requete->closeCursor(); 
?>