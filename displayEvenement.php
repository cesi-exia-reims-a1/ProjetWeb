<?php

$reponse = [
    "success" => false
];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM evenement");
$requete->execute();
   

while($ligne=$requete->fetch()){
    while($donnee = $requete->fetch(PDO::FETCH_ASSOC)){
        $reponse["data"][] = $donnee;
    }
    $reponse["success"] = true;
}

echo json_encode ($reponse);
?>