<?php

$idPersonne = $_SESSION['id'];

include('bdd.php');

$requete = $bdd->prepare("SELECT * FROM panier JOIN produit ON panier.ID_Produit = produit.ID_Produit WHERE ID_Personne = :id_personne");
$requete->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete->execute();  

while($ligne=$requete->fetch()){ ?>
    <div class="row mb-5" style="background-color: white;">
			    	<div class="col-1" id="corbeille">
			    		<a href="scriptDeleteArticlePanier.php?id_produit=<?php echo $ligne['ID_Produit']?>"><img class="corbeille" src="assets/image/corbeillePanier.png"></a>
			    	</div>
					<div class="col-4">
						<center><img src=<?php echo $ligne['Photo_Produit']?>>
						<h1><?php echo $ligne['Nom_Produit']?></h1></center>
					</div>
					<div class="col-3 align-self-center">
						<h3 id="produitPanier">Quantité : <?php echo $ligne['Nombre_Article']?></h3>
					</div>
					<div class="col-3 align-self-center">
						<h3>Prix unitaire : <?php echo $ligne['Prix_Produit']?>€</h3>
					</div>
				</div>
<?php
} 

$requete2 = $bdd->prepare("SELECT p.ID_Produit, p.ID_Personne, p.Nombre_Article, po.Prix_Produit FROM panier p JOIN produit po ON p.ID_Produit = po.ID_Produit WHERE ID_Personne = :id_personne");
$requete2->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete2->execute();  
$prixTotal= 0;
while($ligne=$requete2->fetch()){
	$prix=$ligne['Prix_Produit'];
	$prix2=$ligne['Nombre_Article'];
   $prixTotal += ($prix*$prix2);
   }
echo"<h2 id='prixTotal'>Prix total : " . $prixTotal . "€</h2>";

if ($prixTotal !== 0){
	?>
<form action="scriptValiderCommande.php" method="post" >
	<input type="hidden" value="<?php echo $prixTotal ?>" name="prix_total">
	<input type="submit" value="Valider la commande">
</form>
<?php
} else {
}

$requete->closeCursor(); 
?>
