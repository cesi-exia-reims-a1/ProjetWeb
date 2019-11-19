<?php

$idPhoto = $_GET['id_photo'];

include('bdd.php');

$requete3 = $bdd->prepare("SELECT COUNT(*) as nombre_like FROM like_photo WHERE ID_Photo = :id_photo");
$requete3->bindValue(':id_photo', $idPhoto, PDO::PARAM_STR);
$requete3->execute();
$ligne3=$requete3->fetch();
echo $ligne3['nombre_like'];
?>
