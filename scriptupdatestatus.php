<?php
// Adapter dbname et mot de passe si besoin 
include('bdd.php');
 // Récupération des données utilisateurs 
$Status_Personne = (isset($_POST['Status_Personne'])) ? ($_POST['Status_Personne']) : NULL;

$id = (isset($_POST['ID_Personne'])) ? ($_POST['ID_Personne']) : NULL;

$requete = $bdd->prepare("UPDATE personne SET Status_Personne = :Status_Personne WHERE ID_Personne = :ID_Personne"); 

$requete->bindValue(':Status_Personne', $Status_Personne, PDO::PARAM_STR); 
$requete->bindValue(':ID_Personne', $id, PDO::PARAM_STR); 

$requete->execute();
header('Location: admin.php');
exit();
$requete->closeCursor(); 
?>