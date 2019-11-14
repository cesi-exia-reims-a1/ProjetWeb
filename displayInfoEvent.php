<?php

$idEvent = $_GET['id_evenenment'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete = $bdd->prepare("SELECT * FROM evenement WHERE ID_Evenement = :id_evenement");
    $requete->bindValue(':id_evenementt', $idEvent, PDO::PARAM_STR);
    $requete->execute();  
    $ligne=$requete->fetch();
?>