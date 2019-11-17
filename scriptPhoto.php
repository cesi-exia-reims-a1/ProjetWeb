<?php

session_start();
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 

$URL_Photo = ("assets/image/".$_FILES['URL_Photo']['name']); 
$idEvent = $_POST['ID_Evenement'];
$id = $_SESSION['id'];

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['URL_Photo']) AND $_FILES['URL_Photo']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['URL_Photo']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['URL_Photo']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
						// On peut valider le fichier et le stocker définitivement
						$requete = $bdd->prepare("INSERT INTO Photo (URL_Photo, ID_Evenement, ID_Personne) VALUES ( :URL_Photo, :ID_Evenement, :ID_Personne)"); 
						$requete->bindValue(':URL_Photo', $URL_Photo, PDO::PARAM_STR); 
						$requete->bindValue(':ID_Evenement', $idEvent, PDO::PARAM_STR);
						$requete->bindValue(':ID_Personne', $id, PDO::PARAM_STR);
						$requete->execute();
						$requete->closeCursor(); 
                        move_uploaded_file($_FILES['URL_Photo']['tmp_name'], 'assets/image/' . basename($_FILES['URL_Photo']['name']));
                } else {
				}
        }
}

		header("location:".  $_SERVER['HTTP_REFERER']);
		exit();
	
	

?>