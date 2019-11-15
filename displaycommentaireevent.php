<?php

$idcommentaire = $_GET['id_Commentaire'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
    $requete = $bdd->prepare("SELECT * FROM commentaire WHERE id_Commentaire = :id_Commentaire");
    $requete->bindValue(':id_Commentaire', $idcommentaire, PDO::PARAM_STR);
    $requete->execute();  
    $ligne=$requete->fetch();
    $requete->closeCursor(); 
?>