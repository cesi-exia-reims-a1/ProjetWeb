<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
var_dump($_POST);
$Nom_Produit = (isset($_POST['Nom_Produit'])) ? ($_POST['Nom_Produit']) : NULL;
$requete = $bdd->prepare("DELETE FROM produit WHERE Nom_Produit= :Nom_Produit"); 
var_dump($requete);
$requete->bindValue(':Nom_Produit', $Nom_Produit, PDO::PARAM_STR); 
exit();
$requete->closeCursor(); 
?>