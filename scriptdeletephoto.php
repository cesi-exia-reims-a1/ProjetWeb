<?php
// Adapter dbname et mot de passe si besoin 
include('bdd.php');
 // Récupération des données utilisateurs 

$idPhoto = $_POST['id_photo'];

$requete = $bdd->prepare("UPDATE photo SET Supprime = 1  WHERE ID_Photo = :ID_Photo "); 
$requete->bindValue(':ID_Photo', $idPhoto, PDO::PARAM_STR); 
$requete->execute();
header('Location: admin.php');
exit();

$requete->closeCursor(); 
?>