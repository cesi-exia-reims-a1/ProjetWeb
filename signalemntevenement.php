<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

 // Récupération des données utilisateurs 

$Signale =$_POST['Signale'];
$idEvent =$_POST['id_event'];

 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("UPDATE evenement SET Signale = 1  WHERE :Signale = 'Signale' AND ID_Evenement = :id_evenement ");
$requete->bindValue(':Signale', $Signale, PDO::PARAM_STR);
$requete->bindValue(':id_evenement', $idEvent, PDO::PARAM_STR);
	// Exécution de la requête 
$requete->execute();
$requete->closecursor();

header("location:".  $_SERVER['HTTP_REFERER']); 
exit();

?>