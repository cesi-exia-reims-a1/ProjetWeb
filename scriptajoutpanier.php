<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
$ID_Produit = (isset($_POST['ID_Produit'])) ? ($_POST['ID_Produit']) : NULL;  $ID_Personne= (isset($_POST['ID_Personne'])) ? ($_POST['ID_Personne']) : NULL;
$Nombre_Article =(isset($_POST['Nombre_Article'])) ? ($_POST['Nombre_Article']) : NULL;
 // Requête préparée pour empêcher les injections SQL 
	// Requête préparée pour empêcher les injections SQL 
	
		$requete = $bdd->prepare("INSERT INTO panier ( ID_Produit, ID_Personne, Nombre_Article) VALUES ( :ID_Produit, :ID_Personne, :Nombre_Article)"); 
	 // Liaison des variables de la requête préparée aux variables PHP 
		
		$requete->bindValue(':ID_Produit', $ID_Produit, PDO::PARAM_STR); 
		$requete->bindValue(':ID_Personne', $ID_Personne, PDO::PARAM_STR); 
		$requete->bindValue(':Nombre_Article', $Nombre_Article, PDO::PARAM_STR);
	// Exécution de la requête 
		$requete->execute();
		header('Location: panier.php');
		exit();
	

?>
