<?php

$reponse = [];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM produit");
$requete->execute();
   

while($ligne=$requete->fetch()){
    while($donnee = $requete->fetch(PDO::FETCH_ASSOC)){
        $reponse[] = $donnee;
    }

}

echo json_encode ($reponse);
?>