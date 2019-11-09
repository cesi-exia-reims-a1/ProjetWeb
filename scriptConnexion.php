<?php
// Adapter dbname et mot de passe si besoin
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
// Récupération des données utilisateurs
var_dump($_POST);
$Adresse_eMail = (isset($_POST['Adresse_eMail'])) ? ($_POST['Adresse_eMail']) : NULL;
$Mot_De_Passe = (isset($_POST['Mot_De_Passe'])) ? ($_POST['Mot_De_Passe']) : NULL;
// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("SELECT Status_Personne, Adresse_eMail, Mot_De_Passe FROM personne WHERE Adresse_eMail = :Adresse_eMail");
// Liaison des variables de la requête préparée aux variables PHP
$requete->bindValue(':Adresse_eMail', $Adresse_eMail, PDO::PARAM_STR);


// Exécution de la requête
$requete->execute();
var_dump($requete);
$ligne=$requete->fetch();
var_dump($ligne);
$hash = $ligne['Mot_De_Passe'];
var_dump($hash);
$decrypt = password_verify($Mot_De_Passe, $hash);
var_dump($decrypt);

if($decrypt){
	if ($ligne['Status_Personne'] === '1')
	{
		$requete->execute();
		header('Location: cesi.php');
		exit();
	}

	if ($ligne['Status_Personne'] === 2)
	{
		$requete->execute();
		header('Location : admin.php');
		exit();
	}
		$requete->execute();
		header('Location: index.php');
		exit();
}
else{
		$requete->execute();
		header('Location: inscription.php');
		exit();
}
//Fermeture de la connexion
$requete->closeCursor(); 
?>

