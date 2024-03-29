<?php

include('bdd.php');
$idCentre = $_SESSION['centre'];

$requete = $bdd->prepare("SELECT p.Nom_Produit, p.Photo_Produit, p.Descriptif_Produit, p.ID_Produit, 
								 COUNT(a.ID_Produit)*a.Nombre_Article as NombreDeVente 
						  FROM produit p 
						  JOIN appartenir a ON a.ID_Produit = p.ID_Produit
						  WHERE p.Supprime = 0 AND p.ID_Centre = :id_centre  
						  GROUP BY p.Nom_Produit
						  ORDER BY NombreDeVente DESC
						  LIMIT 3");
$requete->bindParam('id_centre', $idCentre, PDO::PARAM_STR);
$requete->execute();?>

<?php 
$counter = 1;
while($ligne=$requete->fetch()){ ?>
		<div id="carouselBoutique" class="carousel-item<?php if($counter <= 1){echo " active"; } ?>">
			<a class="nolink" href="produit.php?id_produit=<?php echo $ligne['ID_Produit']?>">
				<img class="card-img-top" src=<?php echo $ligne['Photo_Produit']?> alt="imageCarousel">
				<div class="card-body">
					<h5 class="carou card-title"><?php echo $ligne['Nom_Produit']?></h5>
					<p class="carou card-text"><?php echo $ligne['Descriptif_Produit']?></p>
				</div>
			</a>
		</div>
<?php 
$counter++;
}
?>
