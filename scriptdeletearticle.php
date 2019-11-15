<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
$Nom_Produit = $_POST['Nom_Produit'];
echo $Nom_Produit;
$requete = $bdd->prepare("UPDATE produit SET status = 1  WHERE Nom_Produit = :Nom_Produit"); 
var_dump($requete);
$requete->bindValue(':Nom_Produit', $Nom_Produit, PDO::PARAM_STR); 
$requete->execute();
header('Location: admin.php');
exit();

$requete->closeCursor(); 
?>