<?php
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
	<main>
		<div class="container">
			<a class="btn border text-dark" href="boutique.php">Retour à la boutique</a>
			<center><h1>Mon Panier</h1></center>
			<div class="container-fluid pt-5">
				<div class="row border border-dark">
					<div class="col-6">
						<center><img src="kitkat.jpg">
						<h1>Nom Produit</h1></center>
					</div>
					<div class="col-3 align-self-center">
						<h3 id="produitPanier">Quantité</h3>
					</div>
					<div class="col-3 align-self-center">
						<h3>Prix</h3>
					</div>
				</div>
				<div class="row border border-dark">
					<div class="col-6">
						<center><img src="coca.png">
						<h1>Nom Produit</h1></center>
					</div>
					<div class="col-3 align-self-center">
						<h3>Quantité</h3>
					</div>
					<div class="col-3 align-self-center">
						<h3>Prix</h3>
					</div>
				</div>
				<div class="row border border-dark">
					<div class="col-6">
						<center><img src="KinderBueno.jpg">
						<h1>Nom Produit</h1></center>
					</div>
					<div class="col-3 align-self-center">
						<h3>Quantité</h3>
					</div>
					<div class="col-3 align-self-center">
						<h3>Prix</h3>
					</div>
				</div>
				<div class="row border border-dark">
					<div class="col-6">
						<center><img src="mug.png">
						<h1>Nom Produit</h1></center>
					</div>
					<div class="col-3 align-self-center">
						<h3>Quantité</h3>
					</div>
					<div class="col-3 align-self-center">
						<h3>Prix</h3>
					</div>
				</div>
				<div class="row border border-dark">
					<div class="col-6">
						<center><img src="redbull.png">
						<h1>Nom Produit</h1></center>
					</div>
					<div class="col-3 align-self-center">
						<h3>Quantité</h3>
					</div>
					<div class="col-3 align-self-center">
						<h3>Prix</h3>
					</div>
				</div>
				<div class="row border border-dark">
					<div class="col-6">
						<center><img src="twix.png">
						<h1>Nom Produit</h1></center>
					</div>
					<div class="col-3 align-self-center">
						<h3>Quantité</h3>
					</div>
					<div class="col-3 align-self-center">
						<h3>Prix</h3>
					</div>
				</div>
				<h2 id="prixTotal">Prix total</h2>
				<h1 class="btn border border-dark p-2">Valider la commande</h1>
				<div class="p-5"></div>
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