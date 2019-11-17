<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
$URL_Photo = $_POST['URL_Photo'];
echo $URL_Photo;
$requete = $bdd->prepare("UPDATE photo SET Supprime = 1  WHERE URL_Photo = :URL_Photo"); 
var_dump($requete);
$requete->bindValue(':URL_Photo', $URL_Photo, PDO::PARAM_STR); 
$requete->execute();
header('Location: admin.php');
exit();

$requete->closeCursor(); 
?>