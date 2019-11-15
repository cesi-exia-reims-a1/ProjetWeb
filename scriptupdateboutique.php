<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
var_dump($_POST);
$Nom_Produit = (isset($_POST['Nom_Produit'])) ? ($_POST['Nom_Produit']) : NULL;
$requete = $bdd->prepare("SELECT Nom_Produit FROM evenement WHERE Nom_Produit = :Nom_Produit "); 
var_dump($requete);
$requete->bindValue(':Nom_Produit', $Nom_Produit, PDO::PARAM_STR); 
$requete->execute();

if($requete->fetch())
{
	// Fermeture de la connexion 
	$requete->closeCursor(); 

	echo "impossible de trouver le produit" ;
}

else {
	header('Location: modalmodif.php');
}
exit();
$requete->closeCursor(); 
?>