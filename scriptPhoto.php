<?php

session_start();
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
$URL_Photo = $_POST['URL_Photo']; 
$idEvent = $_POST['ID_Evenement'];
$id = $_SESSION['id'];

 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("INSERT INTO Photo (URL_Photo, ID_Evenement, ID_Personne) VALUES ( :URL_Photo, :ID_Evenement, :ID_Personne)"); 
	// Requête préparée pour empêcher les injections SQL 
		
	 // Liaison des variables de la requête préparée aux variables PHP 

		$requete->bindValue(':URL_Photo', $URL_Photo, PDO::PARAM_STR); 
		$requete->bindValue(':ID_Evenement', $idEvent, PDO::PARAM_STR);
		$requete->bindValue(':ID_Personne', $id, PDO::PARAM_STR);

	// Exécution de la requête 
		$requete->execute();
		$requete->closeCursor(); 

		
		header("location:".  $_SERVER['HTTP_REFERER']);
		exit();
	
	

?>