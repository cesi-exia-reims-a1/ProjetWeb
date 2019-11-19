<?php
// Adapter dbname et mot de passe si besoin 
include('bdd.php');
 // Récupération des données utilisateurs 
$Nom_Produit = (isset($_POST['Nom_Produit'])) ? ($_POST['Nom_Produit']) : NULL;  
$Categorie_Produit = (isset($_POST['Categorie_Produit'])) ? ($_POST['Categorie_Produit']) : NULL;
$Prix_Produit =(isset($_POST['Prix_Produit'])) ? ($_POST['Prix_Produit']) : NULL; 
$Descriptif_Produit = (isset($_POST['Descriptif_Produit'])) ? ($_POST['Descriptif_Produit']) : NULL;
//$Photo_Produit =(isset($_FILES['Photo_Produit'])) ? ($_FILES['Photo_Produit']) : NULL;
$Photo_Produit = ("assets/image/" .$_FILES['Photo_Produit']['name']);
$ID_Centre =(isset($_POST['ID_Centre'])) ? ($_POST['ID_Centre']) : NULL;
 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("SELECT Nom_Produit FROM produit WHERE Nom_Produit =:Nom_Produit "); 
 // Liaison des variables de la requête préparée aux variables PHP 
$requete->bindValue(':Nom_Produit', $Nom_Produit, PDO::PARAM_STR); 
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
	if (isset($_FILES['Photo_Produit']) AND $_FILES['Photo_Produit']['error'] == 0)
	{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['Photo_Produit']['size'] <= 50000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['Photo_Produit']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
					// On peut valider le fichier et le stocker définitivement
					//$requete->closeCursor(); 
					// Requête préparée pour empêcher les injections SQL 
					$requete2 = $bdd->prepare("INSERT INTO produit ( Nom_Produit, Categorie_Produit,  Prix_Produit, Photo_Produit, Descriptif_Produit, ID_Centre) VALUES ( :Nom_Produit, :Categorie_Produit, :Prix_Produit, :Photo_Produit, :Descriptif_Produit, :ID_Centre)"); 
					 // Liaison des variables de la requête préparée aux variables PHP 
					$requete2->bindValue(':Nom_Produit', $Nom_Produit, PDO::PARAM_STR); 
					$requete2->bindValue(':Categorie_Produit', $Categorie_Produit, PDO::PARAM_STR); 
					$requete2->bindValue(':Prix_Produit', $Prix_Produit, PDO::PARAM_STR);
					$requete2->bindValue(':Photo_Produit', $Photo_Produit, PDO::PARAM_STR);
					$requete2->bindValue(':Descriptif_Produit', $Descriptif_Produit, PDO::PARAM_STR);
					$requete2->bindValue(':ID_Centre', $ID_Centre, PDO::PARAM_STR);
					// Exécution de la requête 
					$requete2->execute();
                    move_uploaded_file($_FILES['Photo_Produit']['tmp_name'], 'assets/image/' . basename($_FILES['Photo_Produit']['name']));
                    header('Location: admin.php');
                } else {
				}
		}
	}
}
?>