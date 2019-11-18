<?php
session_start();

$idPersonne = $_SESSION['id'];
$idPhoto = $_GET['id_photo'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("INSERT INTO like_photo VALUES (:id_photo, :id_personne)");
$requete->bindValue(':id_photo', $idPhoto, PDO::PARAM_STR);
$requete->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete->execute();

header("location:" . $_SERVER['HTTP_REFERER']);
exit;
$requete->closeCursor(); 
?>