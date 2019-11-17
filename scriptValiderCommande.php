<?php
session_start();
$idPersonne = $_SESSION['id'];
$prixTotal = $_POST['prix_total'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("INSERT INTO commande (ID_Personne, Prix_Total) VALUES (:id_personne, :prix_total)");
$requete->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete->bindValue(':prix_total', $prixTotal, PDO::PARAM_STR);
$requete->execute();  

$requete2 = $bdd->prepare("INSERT INTO appartenir (ID_Commande, ID_Produit, Nombre_Article) SELECT c.ID_Commande, p.ID_Produit, p.Nombre_Article FROM panier p JOIN commande c ON p.ID_Personne = c.ID_Personne");
$requete2->execute();  

$requete4 = $bdd->prepare("SELECT ID_Centre from panier JOIN Personne ON panier.ID_Personne = personne.ID_Personne WHERE panier.ID_Personne = :id_personne");
$requete4->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete4->execute();  
$ligne=$requete4->fetch();

switch ($ligne['ID_Centre']) {
    case 1:
        mail('bdeLille@gmail.com', 'Commande passée',  "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 2:
        mail('bdeArras@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 3:
        mail('bdeRouen@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 4:
        mail('bdeCaen@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 5:
        mail('bdeBrest@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 6:
        mail('bdeParis@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 7:
        mail('bdeReims@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 8:
        mail('bdeNancy@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 9:
        mail('bdeStrasbourg@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 10:
        mail('bdeLeMans@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 11:
        mail('bdeOrléans@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 12:
        mail('bdeSaintNazaire@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 13:
        mail('bdeNantes@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 14:
        mail('bdeChateauroux@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 15:
        mail('bdeDijon@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 16:
        mail('bdeLaRochelle@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 17:
        mail('bdeAngouleme@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 18:
        mail('bdeLyon@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 19:
        mail('bdeGrenoble@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 20:
        mail('bdeBordeaux@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 21:
        mail('bdePau@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 22:
        mail('bdeToulouse@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 23:
        mail('bdeMontpellier@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 24:
        mail('bdeAixEnProvence@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
    case 25:
        mail('bdeNice@gmail.com', 'Commande passée', "Une commande a été passée, prenez rendez-vous avec la personne !");
        break;
        
}

$requete3 = $bdd->prepare("DELETE FROM panier WHERE ID_Personne = :id_personne");
$requete3->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete3->execute();  

//header('Location: boutique.php');
//exit();
$requete->closeCursor(); 
?>