<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
var_dump($_POST);
 // Récupération des données utilisateurs 
$Signale =$_POST['Signale'];
var_dump($Signale);
 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("UPDATE photo SET Signale = 1  WHERE :Signale = 'Signale' ");
$requete->bindValue(':Signale', $Signale, PDO::PARAM_STR);
	// Exécution de la requête 
$requete->execute();
$requete->closecursor();
exit();

?>