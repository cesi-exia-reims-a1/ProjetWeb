<?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT p.Nom_Produit, p.Photo_Produit, p.Descriptif_Produit, p.ID_Produit, 
								 COUNT(a.ID_Produit)*a.Nombre_Article as NombreDeVente 
						  FROM produit p 
						  JOIN appartenir a ON a.ID_Produit = p.ID_Produit  
						  GROUP BY p.Nom_Produit
						  ORDER BY NombreDeVente DESC
						  LIMIT 3");
$requete->execute();?>

<div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel" > 
					<ol class="carousel-indicators">
			  			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<?php 
					$counter = 1;
					while($ligne=$requete->fetch()){ ?>
						<div class="carrousel-item<?php if($counter <= 1){echo " active"; } ?>">
			            <a class="nolink" href="produit.php?id_produit=<?php echo $ligne['ID_Produit']?>">
				            <img class="card-img-top" src=<?php echo $ligne['Photo_Produit']?>>
				            <div class="card-body">
				                <h5 class="card-title"><?php echo $ligne['Nom_Produit']?></h5>
				                <p class="card-text"><?php echo $ligne['Descriptif_Produit']?></p>
				            </div>
			            </a>
						</div>
		            <?php 
		            $counter++;
		            }
		            ?>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  		<span class="sr-only">Précedente</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  		<span class="carousel-control-next-icon" aria-hidden="true"></span>
			  		<span class="sr-only">Suivante</span>
					</a>
</div>

