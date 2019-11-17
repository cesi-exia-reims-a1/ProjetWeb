<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
$ID_Commentaire = $_POST['ID_Commentaire'];
echo $ID_Commentaire;
$requete = $bdd->prepare("UPDATE commentaire SET Supprime = 1  WHERE ID_Commentaire = :ID_Commentaire"); 
var_dump($requete);
$requete->bindValue(':ID_Commentaire', $ID_Commentaire, PDO::PARAM_STR); 
$requete->execute();
header('Location: admin.php');
exit();

$requete->closeCursor(); 
?>