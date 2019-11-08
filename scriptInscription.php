<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
$Nom_Personne = (isset($_POST['Nom_Personne'])) ? ($_POST['Nom_Personne']) : NULL;  $Prenom_Personne = (isset($_POST['Prenom_Personne'])) ? ($_POST['Prenom_Personne']) : NULL;
$Adresse_eMail =(isset($_POST['Adresse_eMail'])) ? ($_POST['Adresse_eMail']) : NULL; $Mot_De_Passe = (isset($_POST['Mot_De_Passe'])) ? ($_POST['Mot_De_Passe']) : NULL;
 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("SELECT Adresse_eMail FROM personne WHERE Adresse_eMail =:Adresse_eMail "); 
 // Liaison des variables de la requête préparée aux variables PHP 
$requete->bindValue(':Adresse_eMail', $Adresse_eMail, PDO::PARAM_STR); 

// Exécution de la requête 
$requete->execute(); 

if($requete->fetch())
{
	// Fermeture de la connexion 
	$requete->closeCursor(); 

	echo "utilsateur existe déjà" ;
}
else
{
	// Fermeture de la connexion 
	$requete->closeCursor(); 


	// Requête préparée pour empêcher les injections SQL 
	if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$#', $Mot_De_Passe)){
		$requete = $bdd->prepare("INSERT INTO personne ( Nom_Personne, Prenom_Personne, Adresse_eMail, Mot_De_Passe) VALUES ( :Nom_Personne, :Prenom_Personne, :Adresse_eMail, :Mot_De_Passe)"); 
	 // Liaison des variables de la requête préparée aux variables PHP 
		$crypt = password_hash($Mot_De_Passe, PASSWORD_DEFAULT);
		$requete->bindValue(':Nom_Personne', $Nom_Personne, PDO::PARAM_STR); 
		$requete->bindValue(':Prenom_Personne', $Prenom_Personne, PDO::PARAM_STR); 
		$requete->bindValue(':Adresse_eMail', $Adresse_eMail, PDO::PARAM_STR);
		$requete->bindValue(':Mot_De_Passe', $crypt, PDO::PARAM_STR);
		
	// Exécution de la requête 
		$requete->execute(); 
		echo "utilsateur inséré";
		echo 'Mot de passe conforme'; 
	}
	else {
		echo 'Mot de passe non conforme';
	}	
}
?>




