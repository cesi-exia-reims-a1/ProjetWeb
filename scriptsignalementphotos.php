<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

 // Récupération des données utilisateurs 
$Signale =$_POST['Signale'];
$idPhoto = $_POST['id_photo'];

 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("UPDATE photo SET Signale = 1  WHERE :Signale = 'Signale' AND ID_Photo = :id_photo");
$requete->bindValue(':Signale', $Signale, PDO::PARAM_STR);
$requete->bindValue(':id_photo', $idPhoto, PDO::PARAM_STR);

	// Exécution de la requête 
$requete->execute();
$requete->closecursor();

header("location:".  $_SERVER['HTTP_REFERER']); 
exit();

?>