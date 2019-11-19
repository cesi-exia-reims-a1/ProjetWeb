<?php
include('bdd.php');
 // Récupération des données utilisateurs 

$idCom = isset($_POST['id_commentaire']) ? ($_POST['id_commentaire']) : NULL;

$requete = $bdd->prepare("UPDATE commentaire SET Supprime = 1  WHERE ID_Commentaire = :ID_Commentaire "); 
$requete->bindValue(':ID_Commentaire', $idCom, PDO::PARAM_STR); 
$requete->execute();
header('location: admin.php');
exit();

$requete->closeCursor(); 
?>