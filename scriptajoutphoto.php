<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
$URL_Photo = (isset($_POST['URL_Photo'])) ? ($_POST['URL_Photo']) : NULL;  $Signale = (isset($_POST['Signale'])) ? ($_POST['Signale']) : NULL;
$Supprime =(isset($_POST['Supprime'])) ? ($_POST['Supprime']) : NULL; $ID_Evenement = (isset($_POST['ID_Evenement'])) ? ($_POST['ID_Evenement']) : NULL;
$ID_Personne = (isset($_POST['ID_Personne'])) ? ($_POST['ID_Personne']) : NULL; 
 // Requête préparée pour empêcher les injections SQL 
	$requete->closeCursor(); 
	// Requête préparée pour empêcher les injections SQL 
		$requete = $bdd->prepare("INSERT INTO Photo (URL_Photo, Signale, Supprime, ID_Evenement, ID_Personne) VALUES ( :URL_Photo, :Signale, :Supprime, :ID_Evenement, :ID_Personne)"); 
	 // Liaison des variables de la requête préparée aux variables PHP 

		$requete->bindValue(':URL_Photo', $URL_Photo, PDO::PARAM_STR); 
		$requete->bindValue(':Signale', $Signale, PDO::PARAM_STR); 
		$requete->bindValue(':Supprime', $Supprime, PDO::PARAM_STR);
		$requete->bindValue(':ID_Evenement', $ID_Evenement, PDO::PARAM_STR);
		$requete->bindValue(':ID_Personne', $ID_Personne, PDO::PARAM_STR);

	// Exécution de la requête 
		$requete->execute();
		header('Location: index.php');
		exit();
	
	

?>