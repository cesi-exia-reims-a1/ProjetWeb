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
	<main>
	<div class="container-fluid mt-3">
		<div class="row mb-5">
			<div class="col">
				<div class="container-fluid">
					<div class="row">
						<div class="col-2">
							<?php include("displayFiltrageBoutique.php")?>
						</div>						
						<div class="col-2">
							<?php include("displayFiltreCatégorie.php")?>
						</div>
						<div class="col-5 text-center">
							<h1>Boutique</h1>
						</div>
						<div class="col-2">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
						</div>
						<div class="col-1 text-right">
							<button class="btn btn-outline-dark" type="submit">Rechercher</button>
						</div>
	        		</div>
	        	</div>
			</div>
	    </div>
		<div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel" > 
				<ol class="carousel-indicators">
			  		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
			<div class="carousel-inner">
			  	<div class="carousel-item active">
					<img class="d-block w-100 taille" src="https://img-new.cgtrader.com/items/911907/93247bf136/red-bull-3d-model-max-obj-fbx-mtl.jpg" alt="First slide">
			  	</div>
			  	<div class="carousel-item">
					<img class="d-block w-100 taille" src="https://hdwallsource.com/img/2018/8/twix-chocolate-computer-wallpaper-62633-64609-hd-wallpapers.jpg" alt="Second slide">
			  	</div>
			  	<div class="carousel-item">
					<img class="d-block w-100 taille" src="https://static.fabrik.io/yok/f4a5cbf141d8670e.jpg?auto=format&lossless=1&w=1920&h=5120&fit=max&s=ba77b1f3075dd03e15a7adf63277dd7b" alt="Third slide">
			  	</div>
			</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  	<span class="sr-only">Précedente</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			  	<span class="sr-only">Suivante</span>
				</a>
		</div>
		<div class="container-fluid">
			<?php include("displayProduct.php"); ?>	
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
	<script type="text/javascript" src="assets/js/javascript.js"></script>
	
</body>
</html>