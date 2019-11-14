<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
var_dump($_POST);
$Nom_Produit = (isset($_POST['Nom_Produit'])) ? ($_POST['Nom_Produit']) : NULL;  $Categorie_Produit = (isset($_POST['Categorie_Produit'])) ? ($_POST['Categorie_Produit']) : NULL;
$Prix_Produit =(isset($_POST['Prix_Produit'])) ? ($_POST['Prix_Produit']) : NULL; $Descriptif_Produit = (isset($_POST['Descriptif_Produit'])) ? ($_POST['Descriptif_Produit']) : NULL;
$Photo_Produit =(isset($_POST['Photo_Produit'])) ? ($_POST['Photo_Produit']) : NULL;
 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("SELECT Nom_Produit FROM produit WHERE Nom_Produit =:Nom_Produit "); 
 // Liaison des variables de la requête préparée aux variables PHP 
$requete->bindValue(':Nom_Produit', $Nom_Produit, PDO::PARAM_STR); 
var_dump($requete);

// Exécution de la requête 
$requete->execute(); 

if($requete->fetch())
{
	// Fermeture de la connexion 
	$requete->closeCursor(); 

	echo "produit existe deja" ;
}
else
{
	// Fermeture de la connexion 
	$requete->closeCursor(); 


	// Requête préparée pour empêcher les injections SQL 
	
		$requete = $bdd->prepare("INSERT INTO produit ( Nom_Produit, Categorie_Produit, Prix_Produit, Photo_Produit, Descriptif_Produit) VALUES ( :Nom_Produit, :Categorie_Produit, :Prix_Produit, :Photo_Produit, :Descriptif_Produit)"); 
	 // Liaison des variables de la requête préparée aux variables PHP 
		var_dump($requete);
		$requete->bindValue(':Nom_Produit', $Nom_Produit, PDO::PARAM_STR); 
		$requete->bindValue(':Categorie_Produit', $Categorie_Produit, PDO::PARAM_STR); 
		$requete->bindValue(':Prix_Produit', $Prix_Produit, PDO::PARAM_STR);
		$requete->bindValue(':Photo_Produit', $Photo_Produit, PDO::PARAM_STR);
		$requete->bindValue(':Descriptif_Produit', $Descriptif_Produit, PDO::PARAM_STR);
	// Exécution de la requête 
		$requete->execute();
echo "produit inséré";
}
?>