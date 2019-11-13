<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
var_dump($_POST);
$Nom_Evenement = (isset($_POST['Nom_Evenement'])) ? ($_POST['Nom_Evenement']) : NULL;  $Date_Evenement = (isset($_POST['Date_Evenement'])) ? ($_POST['Date_Evenement']) : NULL;
$Payant =(isset($_POST['Payant'])) ? ($_POST['Payant']) : NULL; $Prix = (isset($_POST['Prix'])) ? ($_POST['Prix']) : NULL;
$Recursif =(isset($_POST['Recursif'])) ? ($_POST['Recursif']) : NULL; $URL_Photo =(isset($_POST['URL_Photo'])) ? ($_POST['URL_Photo']) : NULL; 
 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("SELECT Nom_Evenement FROM evenement WHERE Nom_Evenement =:Nom_Evenement"); 
 // Liaison des variables de la requête préparée aux variables PHP 
$requete->bindValue(':Nom_Evenement', $Nom_Evenement, PDO::PARAM_STR); 
var_dump($requete);

// Exécution de la requête 
$requete->execute(); 

if($requete->fetch())
{
	// Fermeture de la connexion 
	$requete->closeCursor(); 

	echo "événement existe déja" ;
}
else
{
	// Fermeture de la connexion 
	$requete->closeCursor(); 


	// Requête préparée pour empêcher les injections SQL 
	
		$requete = $bdd->prepare("INSERT INTO evenement ( Nom_Evenement, Date_Evenement, Payant, Prix, Recursif, URL_Photo) VALUES ( :Nom_Evenement, :Date_Evenement, :Payant, :Prix, :Recursif, :URL_Photo)"); 
	 // Liaison des variables de la requête préparée aux variables PHP 
	
		$requete->bindValue(':Nom_Evenement', $Nom_Evenement, PDO::PARAM_STR); 
		$requete->bindValue(':Date_Evenement', $Date_Evenement, PDO::PARAM_STR); 
		$requete->bindValue(':Payant', $Payant, PDO::PARAM_STR);
		$requete->bindValue(':Prix', $Prix, PDO::PARAM_STR);
		$requete->bindValue(':Recursif', $Recursif, PDO::PARAM_STR);
		$requete->bindValue(':URL_Photo', $URL_Photo, PDO::PARAM_STR);
	// Exécution de la requête 
		$requete->execute();
echo "événement inséré";
}
?>