 <?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete = $bdd->prepare("SELECT * FROM produit");
    $requete->execute();  
?>

		<div class="container-fluid">
			<div class="row">
				<?php while($ligne=$requete->fetch()){ ?>
					<div>
						<div class="border border-secondary text-center m-5"><center><a href="produit.php"><img src=<?php echo $ligne['Photo_Produit']?>></a></center> <h2> <?php echo 	$ligne['Nom_Produit']?> </h2><h3> <?php echo  $ligne['Prix_Produit']?> €</h3>
						</div>	
					</div>
				<?php
				} ?>
			</div>
		</div>
