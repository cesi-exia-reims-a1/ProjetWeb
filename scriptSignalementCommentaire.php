<?php

$Destinataires = "vivientouvier@gmail.com";

// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

 // Récupération des données utilisateurs 

$Signale =$_POST['Signaler'];
$idCom =$_POST['id_com'];

 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("UPDATE commentaire SET Signale = 1  WHERE :Signale = 'Signaler' AND ID_Commentaire = :id_com ");
$requete->bindValue(':Signale', $Signale, PDO::PARAM_STR);
$requete->bindValue(':id_com', $idCom, PDO::PARAM_STR);
	// Exécution de la requête 
$requete->execute();
$requete->closecursor();
 
mail($Destinataires, "Signalement commentaire", "Le commentaire $idCom a été signalé !");

header("location:".  $_SERVER['HTTP_REFERER']); 
exit();

?>