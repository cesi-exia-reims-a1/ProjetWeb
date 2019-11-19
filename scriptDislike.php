<?php
session_start();
$idPersonne = $_SESSION['id'];
$idPhoto = $_GET['id_photo'];

include('bdd.php');

$requete = $bdd->prepare("DELETE FROM like_photo WHERE ID_Photo = :id_photo AND ID_Personne = :id_personne");
$requete->bindValue(':id_photo', $idPhoto, PDO::PARAM_STR);
$requete->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete->execute();

header("location:" . $_SERVER['HTTP_REFERER']);
exit;
$requete->closeCursor(); 
?>