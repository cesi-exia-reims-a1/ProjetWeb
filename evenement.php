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
<body id="couleur">
	<header>
	<?php include 'navbar.php' ?>
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
        				<?php include("displayCarousselEvenement.php"); ?>	
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
		<div style="text-align: center; margin-top:5em;"> <h3> Les trois derniers événements !</h3></div>

		<div class="card-deck" style="margin-right:1em;margin-left:1em;">
			<?php include('displayAncienEvenement.php')?>
		</div>
		 
		</main>
		<footer>
			
		</footer>
	<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script type="text/javascript" src="asets/js/javascript.js"></script>
</body>
</html>