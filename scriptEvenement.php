<?php
// Adapter dbname et mot de passe si besoin 
include('bdd.php');
 // Récupération des données utilisateurs 
$Nom_Evenement = (isset($_POST['Nom_Evenement'])) ? ($_POST['Nom_Evenement']) : NULL;  
$Date_Evenement = (isset($_POST['Date_Evenement'])) ? ($_POST['Date_Evenement']) : NULL;
$Payant =(isset($_POST['Payant'])) ? ($_POST['Payant']) : NULL; 
$Prix = (isset($_POST['Prix'])) ? ($_POST['Prix']) : NULL;
$Recursif =(isset($_POST['Recursif'])) ? ($_POST['Recursif']) : NULL; 
$Photo_Produit = ("assets/image/" .$_FILES['Photo_Produit']['name']);
$Description_Evenement =(isset($_POST['Description_Evenement'])) ? ($_POST['Description_Evenement']) : NULL;
$ID_Centre = (isset($_POST['ID_Centre'])) ? ($_POST['ID_Centre']) : NULL;
 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("SELECT Nom_Evenement FROM evenement WHERE Nom_Evenement =:Nom_Evenement"); 
 // Liaison des variables de la requête préparée aux variables PHP 
$requete->bindValue(':Nom_Evenement', $Nom_Evenement, PDO::PARAM_STR); 

// Exécution de la requête 
$requete->execute(); 

if($requete->fetch())
{
	// Fermeture de la connexion 
	$requete->closeCursor(); 
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
					$requete2 = $bdd->prepare("INSERT INTO evenement ( Nom_Evenement, Date_Evenement, ID_Centre ,Payant, Prix, Recursif,  URL_PHoto, Description_Evenement) VALUES ( :Nom_Evenement, :Date_Evenement, :ID_Centre, :Payant, :Prix, :Recursif, :URL_PHoto, :Description_Evenement)"); 
					 // Liaison des variables de la requête préparée aux variables PHP 
						$requete2->bindValue(':Nom_Evenement', $Nom_Evenement, PDO::PARAM_STR); 
						$requete2->bindValue(':Date_Evenement', $Date_Evenement, PDO::PARAM_STR); 
						$requete2->bindValue(':Payant', $Payant, PDO::PARAM_STR);
						$requete2->bindValue(':Prix', $Prix, PDO::PARAM_STR);
						$requete2->bindValue(':Recursif', $Recursif, PDO::PARAM_STR);
						$requete2->bindValue(':URL_PHoto', $Photo_Produit, PDO::PARAM_STR);
						$requete2->bindValue(':Description_Evenement', $Description_Evenement, PDO::PARAM_STR);
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
	
		