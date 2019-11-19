<?php
// Adapter dbname et mot de passe si besoin 
include('bdd.php');
 // Récupération des données utilisateurs 
$Nom_Evenement = (isset($_POST['Nom_Evenement'])) ? ($_POST['Nom_Evenement']) : NULL; 
$Date_Evenement = (isset($_POST['Date_Evenement'])) ? ($_POST['Date_Evenement']) : NULL;
$Payant =(isset($_POST['Payant'])) ? ($_POST['Payant']) : NULL;
$Prix = (isset($_POST['Prix'])) ? ($_POST['Prix']) : NULL;
$Recursif =(isset($_POST['Recursif'])) ? ($_POST['Recursif']) : NULL;
$Description_Evenement =(isset($_POST['Description_Evenement'])) ? ($_POST['Description_Evenement']) : NULL;

$idEvent = (isset($_POST['ID_Evenement'])) ? ($_POST['ID_Evenement']) : NULL;


$requete = $bdd->prepare("UPDATE evenement SET Nom_Evenement = :Nom_Evenement, Date_Evenement = :Date_Evenement, Payant = :Payant, Prix = :Prix, Recursif =:Recursif, Description_Evenement = :Description_Evenement WHERE ID_Evenement = :ID_Evenement"); 

$requete->bindValue(':Nom_Evenement', $Nom_Evenement, PDO::PARAM_STR); 
$requete->bindValue(':Date_Evenement', $Date_Evenement, PDO::PARAM_STR);
$requete->bindValue(':Payant', $Payant, PDO::PARAM_STR);
$requete->bindValue(':Prix', $Prix, PDO::PARAM_STR);
$requete->bindValue(':Recursif', $Recursif, PDO::PARAM_STR);
$requete->bindValue(':Description_Evenement', $Description_Evenement, PDO::PARAM_STR);
$requete->bindValue(':ID_Evenement', $idEvent, PDO::PARAM_STR);

$requete->execute();
header('Location: admin.php');
exit();

$requete->closeCursor(); 
?>