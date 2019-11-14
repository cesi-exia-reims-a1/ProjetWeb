<?php
session_start();
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>

<!DOCTYPE html>
<html>
<head>
	<title>BDE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href ="assets/css/style.css">
</head>
<body>
	<header>
		<?php include 'navbar.php' ?>
	</header>
		<main class="container-fluid p-5">
		<?php include("displayArticle.php"); ?>	
			<div class="row p-5">
				<div class="col-8 p-5 border border-dark" id="imgProduit">
					<div class="">
						<center><img src=<?php echo $ligne['Photo_Produit']?> id="imageProduit"></center>
					</div>
					<div>
						<center><h1 class="pt-5"><?php echo $ligne['Nom_Produit'] ?></h1></center>
					</div>
				</div>
				<div class="col-4">
					<div class="border border-dark p-3" id="imgProduit">
						<center><h1 class="pb-5">Description</h1></center>
						<h3 style="text-align: justify;" class="pb-5"><?php echo $ligne['Descriptif_Produit']?></h3>
					</div>
					<div class="container-fluid">
						<div class="row p-5">
							<form action="scriptAjoutPanier.php?id_produit=<?php echo $ligne['ID_Produit']?>" method="post">
							<div class="col" id="Quantite">
								<h3>Prix unitaire : <?php echo $ligne['Prix_Produit']?> €</h3>
								<label for="Quantite"></label>
								<h3>Quantité :</h3>
								<input type="float" id="Quantite" class="form-control" name="Nombre_Article"  placeholder="Quantité">
								<div class="m-5">
								<input class="p-3" type="submit" value="Ajouter au panier"/>
								</div>
							</div>
							</form>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="mt-3">
		<?php include 'footer.php' ?>
	</footer>
	<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="javascript.js"></script>
	<script src="./vendor/node_modules/jquery/dist/jquery.js"></script>
	<script src="./apirest/ajax.js"></script>
	<script type="text/javascript" src="asets/js/javascript.js"></script>
</body>
</html>
