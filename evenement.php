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
    <link rel="stylesheet" href ="style.css">
</head>
<body id="inscription">
	<header>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #DBDBDB;">
			<a class="navbar-brand" href="index.php"><img src="https://montpellier.cesi.fr/wp-content/uploads/sites/25/2018/11/Cesi_Logo_INGENIEUR_RVB-360x213.png" width="90" height="52" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse d-flex bd-highlight" id="navbarNavAltMarkup">
					<div class="bd-highlight"/><a href="boutique.php" class="nav-item nav-link active text-dark">Boutique</a></div>
					<div class="bd-highlight"/><a href="evenement.php" class="nav-item nav-link active text-dark">Evenement</a></div>
					<div class="bd-highlight"/><a href="galerie.php" class="nav-item nav-link active text-dark">Galerie</a></div>
					<div class="ml-auto bd-highlight"/><a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm">Connexion</a></div>
					<!-- Modal -->
					<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<!--Content-->
							<div class="modal-content form-elegant">
								<!--Header-->
								<div class="modal-header text-center">
									<h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Connexion</strong></h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<!--Body-->
								<div class="modal-body mx-4">
									<!--Body-->
									<form method="post" action="scriptConnexion.php" autocomplete="on">
										<div id="login" class="md-form mb-5">
											<input type="email" id="email" name= "Adresse_eMail" class="form-control validate">
											<label data-error="wrong" required ="required" data-success="right" for="email">Email</label>
										</div>
										<div class="md-form pb-3">
											<input type="password" id="password" name ="Mot_De_Passe" class="form-control validate">
											<label data-error="wrong" data-success="right" required ="required" for="password">Mot de passe</label>
										</div>
										<div class="text-center mb-3">
											<input type="submit" value ="login" class="btn blue-gradient btn-block btn-rounded z-depth-1a">
										</div>
									</form>
								</div>


								<!--Footer-->
								<div class="modal-footer mx-5 pt-3 mb-1">
									<p class="font-small grey-text d-flex justify-content-end">Vous n'avez pas de comtpe? <a href="inscription.php" class="blue-text ml-1">S'inscrire</a></p>
								</div>
							</div>
							<!--/.Content-->
						</div>
        			<!-- Modal -->
				</nav>
			</header>


		<main>

		<div class="row" style="margin-top:2em;">


		<!--Conditions d'inscription-->


			<div class="card border-dark mb-3" style="max-width: 18rem; margin-left:11%">
  				<div class="card-header">Conditions d'inscription</div>
  				<div class="card-body">
    				<h5 class="card-title">Primary card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				</div>
			</div>


			<!--Carousel événements-->


			<div class="bd-example container">
  				<div id="carouselExampleCaptions" class="carousel slide container" data-ride="carousel">
    				<ol class="carousel-indicators">
      				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    				</ol>
    				<div class="carousel-inner">
      				<div class="carousel-item active" id="evenement">
        				<div class="carousel-caption d-none d-md-block">
          				<h5>Paris Games Week</h5>
        				</div>
      				</div>
      				<div class="carousel-item">
        				<img src="https://www.presse-citron.net/wordpress_prod/wp-content/uploads/2019/08/gamescom-2019.jpg" class="d-block w-100" alt="Gamescom">
        				<div class="carousel-caption d-none d-md-block">
          				<h5>Gamescom</h5>
        				</div>
      				</div>
      				<div class="carousel-item">
        				<img src="https://lemagjeuxhightech.com/wp-content/uploads/2018/06/E3-2018-demandez-le-programme-des-conferences-.jpg" class="d-block w-100" alt="E3">
        				<div class="carousel-caption d-none d-md-block">
          				<h5>E3</h5>
        				</div>
      				</div>
    				</div>
    				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      				<span class="sr-only">Previous</span>
    				</a>
    				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      				<span class="carousel-control-next-icon" aria-hidden="true"></span>
      				<span class="sr-only">Next</span>
    				</a>
  				</div>
			</div>	
		</div>


		<!-- Anciens événements -->


		<div style="text-align: center; margin-top:5em;"> <h3> Les trois derniers événements !</p> </h3>

		<div class="card-deck" style="margin-right:1em;margin-left:1em;">
  			<div class="card">
    			<img class="card-img-top" src="https://images.alphacoders.com/943/thumb-1920-943148.jpg" alt="photo1">
    			<div class="card-body">
      			<h5 class="card-title">titre 1</h5>
      			<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    			</div>
			</div>
			  
  			<div class="card">
    			<img class="card-img-top" src="https://images.wallpaperscraft.com/image/road_night_light_125999_1920x1080.jpg" alt="photo 2">
    			<div class="card-body">
      			<h5 class="card-title">titre 2</h5>
      			<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    			</div>
			</div>
			  
  			<div class="card">
    			<img class="card-img-top" src="https://images8.alphacoders.com/926/thumb-1920-926492.jpg" alt="titre 3">
    			<div class="card-body">
      			<h5 class="card-title">titre 3 </h5>
      			<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
				</div>
  			</div>
		</div>
		</main>
		<footer>
			
		</footer>
	<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="./vendor/node_modules/jquery/dist/jquery.js"></script>
	<script src="./apirest/ajax.js"></script>

</body>
</html>