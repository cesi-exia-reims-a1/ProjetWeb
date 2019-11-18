<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 

$idEvent = $_POST['id_evenement'];

$requete = $bdd->prepare("UPDATE evenement SET Supprime = 1  WHERE ID_Evenement = :ID_Evenement "); 
$requete->bindValue(':ID_Evenement', $idEvent, PDO::PARAM_STR); 
$requete->execute();
header('Location: admin.php');
exit();

$requete->closeCursor(); 
?>