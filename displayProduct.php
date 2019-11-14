 <?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete = $bdd->prepare("SELECT * FROM produit");
    $requete->execute();  
?>

		<div class="container-fluid">
			<div class="row justify-items-center">
				<?php while($ligne=$requete->fetch()){ ?>
					<div id="caseProduit" class="col border border-secondary text-center m-5">
						<a class="nolink" href="produit.php">
						<img src=<?php echo $ligne['Photo_Produit']?>>
						<h2> <?php echo $ligne['Nom_Produit']?> </h2>
						<h3> <?php echo $ligne['Prix_Produit']?> €</h3>
						</a>
						<input type="hidden" name=> 
					</div>
				<?php
				} ?>
			</div>
		</div>
