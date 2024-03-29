<?php

$Destinataires = "romain.malarmey@gmail.com";

// Adapter dbname et mot de passe si besoin 
include('bdd.php');

 // Récupération des données utilisateurs 
$Signale =$_POST['Signale'];
$idPhoto = $_POST['id_photo'];

 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("UPDATE photo SET Signale = 1  WHERE :Signale = 'Signaler' AND ID_Photo = :id_photo");
$requete->bindValue(':Signale', $Signale, PDO::PARAM_STR);
$requete->bindValue(':id_photo', $idPhoto, PDO::PARAM_STR);

	// Exécution de la requête 
$requete->execute();
$requete->closecursor();

mail($Destinataires, "Signalement photo", "La photo $idPhoto a été signalée ! PS : Romain t'es un fdp");

header("location:".  $_SERVER['HTTP_REFERER']); 
exit();

?>