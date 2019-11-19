<?php
// Adapter dbname et mot de passe si besoin 
include('bdd.php');
 // Récupération des données utilisateurs 
$Nom_Personne = (isset($_POST['Nom_Personne'])) ? ($_POST['Nom_Personne']) : NULL;  $Prenom_Personne = (isset($_POST['Prenom_Personne'])) ? ($_POST['Prenom_Personne']) : NULL;
$Adresse_eMail =(isset($_POST['Adresse_eMail'])) ? ($_POST['Adresse_eMail']) : NULL; $Mot_De_Passe = (isset($_POST['Mot_De_Passe'])) ? ($_POST['Mot_De_Passe']) : NULL;
$ID_Centre = (isset($_POST['ID_Centre'])) ? ($_POST['ID_Centre']) : NULL; $cgu =(isset($_POST['cgu'])) ? ($_POST['cgu']) : NULL;
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
	}
	else {
		echo 'Mot de passe non conforme';
	}	
}
?>




