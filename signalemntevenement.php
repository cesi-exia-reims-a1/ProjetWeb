<?php

$Destinataires = "vivientouvier@gmail.com";

// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

 // Récupération des données utilisateurs 

$Signale =$_POST['Signaler'];
$idEvent =$_POST['id_event'];
echo $idEvent;
echo $Signale;

 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("UPDATE evenement SET Signale = 1  WHERE :Signale = 'Signaler' AND ID_Evenement = :id_evenement ");
$requete->bindValue(':Signale', $Signale, PDO::PARAM_STR);
$requete->bindValue(':id_evenement', $idEvent, PDO::PARAM_STR);
	// Exécution de la requête 
$requete->execute();
$requete->closecursor();
 
mail($Destinataires, "Signalement evenement", "L'évenement $idEvent a été signalé ! PS : Romain t'es un fdp");

header("location:".  $_SERVER['HTTP_REFERER']); 
exit();

?>