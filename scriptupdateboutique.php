

<?php
// Adapter dbname et mot de passe si besoin 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
 // Récupération des données utilisateurs 
  $Categorie_Produit = (isset($_POST['Categorie_Produit'])) ? ($_POST['Categorie_Produit']) : NULL;
$Prix_Produit =(isset($_POST['Prix_Produit'])) ? ($_POST['Prix_Produit']) : NULL; $Descriptif_Produit = (isset($_POST['Descriptif_Produit'])) ? ($_POST['Descriptif_Produit']) : NULL;

$idProduct = (isset($_POST['ID_Produit'])) ? ($_POST['ID_Produit']) : NULL;
var_dump($idProduct);
$requete = $bdd->prepare("UPDATE produit SET Categorie_Produit = :Categorie_Produit, Prix_Produit = :Prix_Produit, Descriptif_Produit = :Descriptif_Produit  WHERE ID_Produit = :ID_Produit"); 

$requete->bindValue(':Categorie_Produit', $Categorie_Produit, PDO::PARAM_STR); 
$requete->bindValue(':Prix_Produit', $Prix_Produit, PDO::PARAM_STR);
$requete->bindValue(':Descriptif_Produit', $Descriptif_Produit, PDO::PARAM_STR);
$requete->bindValue(':ID_Produit', $idProduct, PDO::PARAM_STR);

$requete->execute();

exit();

$requete->closeCursor(); 
?>s