<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 

$idPhoto = isset($_POST['id_photo']);

$requete = $bdd->prepare("UPDATE commentaire SET Supprime = 1 JOIN personne ON commentaire.ID_Personne = personne.ID_Personne WHERE ID_Photo = :ID_Photo "); 
$requete->bindValue(':ID_Photo', $idPhoto, PDO::PARAM_STR); 
$requete->execute();

exit();

$requete->closeCursor(); 
?>