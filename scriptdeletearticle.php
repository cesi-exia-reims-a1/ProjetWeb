<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 

$idProduct = isset($_GET['id_produit']);
var_dump($idProduct);

$requete = $bdd->prepare("UPDATE produit SET Supprime = 1  WHERE ID_Produit = :ID_Produit "); 
$requete->bindValue(':ID_Produit', $idProduct, PDO::PARAM_STR); 
$requete->execute();

exit();

$requete->closeCursor(); 
?>