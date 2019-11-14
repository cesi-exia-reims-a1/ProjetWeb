<?php

session_start();

$idPersonne = $_SESSION['id'];
$idProduct = $_GET['id_produit'];
$nombre = $_POST['Nombre_Article'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete = $bdd->prepare("INSERT INTO panier VALUES (:id_personne, :id_produit, :nombre_article");
    $requete->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
    $requete->bindValue(':id_personne', $idProduct, PDO::PARAM_STR);
    $requete->bindValue(':nombre_article', $nombre, PDO::PARAM_STR);
    $requete->execute();  
?>