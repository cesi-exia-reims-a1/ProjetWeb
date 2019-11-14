 <?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete = $bdd->prepare("SELECT * FROM produit");
    $requete->execute();  
?>

		<div class="container-fluid">
			<div class="row justify-items-center">
				<?php while($ligne=$requete->fetch()){ ?>
					<div id="caseProduit" class="col border border-secondary text-center m-5">
						<a class="nolink" href="produit.php?id_produit=<?php echo $ligne['ID_Produit']?>">
						<img src=<?php echo $ligne['Photo_Produit']?>>
						<h2> <?php echo $ligne['Nom_Produit']?> </h2>
						<h3> <?php echo $ligne['Prix_Produit']?> €</h3>
						</a>
					</div>
				<?php
				} ?>
			</div>
		</div>
