<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
$Texte = (isset($_POST['Texte'])) ? ($_POST['Texte']) : NULL;  $Prenom_Personne = (isset($_POST['Prenom_Personne'])) ? ($_POST['Prenom_Personne']) : NULL;
$Adresse_eMail =(isset($_POST['Adresse_eMail'])) ? ($_POST['Adresse_eMail']) : NULL; $Mot_De_Passe = (isset($_POST['Mot_De_Passe'])) ? ($_POST['Mot_De_Passe']) : NULL;
$ID_Centre = (isset($_POST['ID_Centre'])) ? ($_POST['ID_Centre']) : NULL; $cgu =(isset($_POST['cgu'])) ? ($_POST['cgu']) : NULL;
 // Requête préparée pour empêcher les injections SQL
// Fermeture de la connexion 
$requete->closeCursor(); // Requête préparée pour empêcher les injections SQL 

		$requete = $bdd->prepare("INSERT INTO personne ( Nom_Personne, Prenom_Personne, Adresse_eMail, Mot_De_Passe, ID_Centre, cgu) VALUES ( :Nom_Personne, :Prenom_Personne, :Adresse_eMail, :Mot_De_Passe, :ID_Centre, :cgu)"); 
	 // Liaison des variables de la requête préparée aux variables PHP 
		$crypt = password_hash($Mot_De_Passe, PASSWORD_DEFAULT);
		$requete->bindValue(':Nom_Personne', $Nom_Personne, PDO::PARAM_STR); 
		$requete->bindValue(':Prenom_Personne', $Prenom_Personne, PDO::PARAM_STR); 
		$requete->bindValue(':Adresse_eMail', $Adresse_eMail, PDO::PARAM_STR);
		$requete->bindValue(':Mot_De_Passe', $crypt, PDO::PARAM_STR);
		$requete->bindValue(':ID_Centre', $ID_Centre, PDO::PARAM_STR);
		$requete->bindValue(':cgu', $cgu, PDO::PARAM_STR);
	// Exécution de la requête 
		$requete->execute();
		header('Location: index.php');
		exit();

?>