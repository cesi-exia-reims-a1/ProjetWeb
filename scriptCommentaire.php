<?php

session_start();

$texte = $_POST['commentaire'];
$id_Photo = $_POST['id'];
$id_Personne=$_SESSION['id'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("INSERT INTO commentaire (Texte, ID_Photo, ID_Personne) VALUES(:texte, :id_photo, :id_personne)");
$requete->bindValue(':texte', $texte, PDO::PARAM_STR);
$requete->bindValue(':id_photo', $id_Photo, PDO::PARAM_STR);
$requete->bindValue(':id_personne', $id_Personne, PDO::PARAM_STR);
$requete->execute();  

header("location:" . $_SERVER['HTTP_REFERER']);

$requete->closeCursor(); 
?>