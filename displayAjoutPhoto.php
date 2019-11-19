<?php

// Adapter dbname et mot de passe si besoin 
include('bdd.php');

 // Récupération des données utilisateurs 

 $idEvent = $_GET['id_evenement'];
 $idPers = (isset($_SESSION['id'])) ? ($_SESSION['id']) : NULL;
 $today = date("Y-m-d");

 // Requête préparée pour empêcher les injections SQL 
$requete = $bdd->prepare("SELECT * from participer WHERE ID_Evenement = :id_evenement AND ID_Personne = :id_personne ");
$requete->bindValue(':id_evenement', $idEvent, PDO::PARAM_STR);
$requete->bindValue(':id_personne', $idPers, PDO::PARAM_STR);
	// Exécution de la requête 
$requete->execute();

if ($dateEvent<$today && isset($_SESSION['pseudo']) && $requete->rowCount() > 0) {?>
    <div class="col-3">
		<form method="post" action="scriptPhoto.php" autocomplete="on" enctype="multipart/form-data">
			<div id="newevent" class="form-group">
				<input type='hidden' name='ID_Evenement' value='<?php echo $idEvent?>'>
				<input type="file" name="URL_Photo" size=50 >
			</div>
			<p class="signin button"> 
			<input type="submit" value="Postez votre photo" id="submitButton"  />
			</p>
		</form>
	</div>
    <?php
  } else {

  }

$requete->closeCursor(); 

?>