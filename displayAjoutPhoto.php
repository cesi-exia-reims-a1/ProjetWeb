<?php

// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

 // Récupération des données utilisateurs 

 $idEvent = $_GET['id_evenement'];
 $idPers = $_SESSION['id'];

 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("SELECT * from participer WHERE ID_Evenement = :id_evenement AND ID_Personne = :id_personne ");
$requete->bindValue(':id_evenement', $idEvent, PDO::PARAM_STR);
$requete->bindValue(':id_personne', $idPers, PDO::PARAM_STR);
	// Exécution de la requête 
$requete->execute();

if ($requete->rowCount() > 0) {?>
    <div class="col-3">
		<form method="POST" action="scriptPhoto.php">
			<input type="hidden" value="" name="id">
			<input class="m-5 p-3" type="submit" value="Ajouter une photo">
		</form>
	</div>
    <?php
  } else {

  }

$requete->closeCursor(); 

?>