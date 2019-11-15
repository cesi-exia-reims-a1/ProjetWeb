<?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("INSERT INTO commande (ID_Personne, Prix_Total) VALUES (:id_personne, :prix_total)");
$requete->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete->bindValue(':prix_total', $prixTotal, PDO::PARAM_STR);
$requete->execute();  

$requete2 = $bdd->prepare("INSERT INTO appartenir (ID_Commande, ID_Produit, Nombre_Article) SELECT c.ID_Commande, p.ID_Produit, p.Nombre_Article FROM panier p JOIN commande c ON p.ID_Personne = c.ID_Personne");
$requete2->execute();  

header('Location: boutique.php');
exit();
$requete->closeCursor(); 
?>