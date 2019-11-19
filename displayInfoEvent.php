<?php

$idEvent = $_GET['id_evenement'];

include('bdd.php');

$requete = $bdd->prepare("SELECT * FROM evenement WHERE ID_Evenement = :id_evenement");
$requete->bindValue(':id_evenement', $idEvent, PDO::PARAM_STR);
$requete->execute();  
$ligne=$requete->fetch();
$dateEvent = $ligne['Date_Evenement'];
?>