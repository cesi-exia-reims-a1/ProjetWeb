<?php

session_start();
$idPersonne = $_SESSION['id'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM panier JOIN produit ON panier.ID_Produit = produit.ID_Produit WHERE ID_Personne = :id_personne");
$requete->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete->execute();  

while($ligne=$requete->fetch()){ ?>
    <div class="row border border-dark">
					<div class="col-6">
						<center><img src=<?php echo $ligne['Photo_Produit']?>>
						<h1><?php echo $ligne['Nom_Produit']?></h1></center>
					</div>
					<div class="col-3 align-self-center">
						<h3 id="produitPanier">Quantité : <?php echo $ligne['Nombre_Article']?></h3>
					</div>
					<div class="col-3 align-self-center">
						<h3>Prix : <?php echo $ligne['Prix_Produit']?></h3>
					</div>
				</div>
<?php
} 
$requete->closeCursor(); 
?>
