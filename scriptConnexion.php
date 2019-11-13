<?php
use \Firebase\JWT\JWT;
require __DIR__ . '/vendor/autoload.php';

session_start();

// Adapter dbname et mot de passe si besoin
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
// Récupération des données utilisateurs
$Adresse_eMail = (isset($_POST['Adresse_eMail'])) ? ($_POST['Adresse_eMail']) : NULL;
$Mot_De_Passe = (isset($_POST['Mot_De_Passe'])) ? ($_POST['Mot_De_Passe']) : NULL;
// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("SELECT Prenom_Personne, Status_Personne, Adresse_eMail, Mot_De_Passe FROM personne WHERE Adresse_eMail = :Adresse_eMail");
// Liaison des variables de la requête préparée aux variables PHP
$requete->bindValue(':Adresse_eMail', $Adresse_eMail, PDO::PARAM_STR);

// Exécution de la requête
$requete->execute();
$ligne=$requete->fetch();
$pseudo = $ligne['Prenom_Personne'];
$hash = $ligne['Mot_De_Passe'];
$decrypt = password_verify($Mot_De_Passe, $hash);
$token = array("mail" => $_POST['Adresse_eMail'], "password" => $_POST['Mot_De_Passe']);
$jwt = JWT::encode($token, 'secretkey');
//var_dump($jwt);


if($decrypt){
	if (isset($_SESSION['pseudo'])){
		session_destroy();
        session_start();
		$_SESSION['pseudo'] = $pseudo;
		echo $_SESSION['pseudo'];
	}
       
	if ($ligne['Status_Personne'] === '1')
	{
		//header('Location: index.php');
		exit();
	}

	if ($ligne['Status_Personne'] === 2)
	{
		header('Location : admin.php');
		exit();
	}
		header('Location: index.php');
		exit();
}
else{
		header('Location: inscription.php');
		
		exit();
}
//Fermeture de la connexion
$requete->closeCursor(); 
?>

