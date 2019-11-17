<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
var_dump($_POST);
$Nom_Evenement = (isset($_POST['Nom_Evenement'])) ? ($_POST['Nom_Evenement']) : NULL;
$requete = $bdd->prepare("SELECT Nom_Evenement FROM evenement WHERE Nom_Evenement = :Nom_Evenement "); 
var_dump($requete);
$requete->bindValue(':Nom_Evenement', $Nom_Evenement, PDO::PARAM_STR); 
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