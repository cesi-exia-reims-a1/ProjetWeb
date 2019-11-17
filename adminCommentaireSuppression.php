<?php
session_start();
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>

<!DOCTYPE html>
<html>
<head>
	<title>BDE --Administration</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href ="assets/css/style.css">
	
</head>
<body>
	<header>
		<?php include 'navbar.php' ?>
	</header>
			<main>
				<h1 class="text-center p-2">ADMINISTRATION DU SITE</h1>
				<div id="adminBouton" class="container-fluid p-5">
					<div class="row p-5">
						<div class="col">
							<a id="boutonAdmin" class= "border border-secondary text-center p-5" href="adminboutique.php">BOUTIQUE</a>
						</div>
						<div class="col">	
							<a id="boutonAdmin" class= "border border-secondary text-center p-5" href="adminEvenement.php">EVENEMENTS</a>
						</div>
						<div class="col">
							<a id="boutonAdmin" class= "border border-secondary text-center p-5" href="adminPhotoCommentaire.php">PHOTOS + COMMENTAIRES</a>
						</div>
						<div class="col">
							<a id="boutonAdmin" class= "border border-secondary text-center p-5" href="adminUtilisateur.php">UTILISATEURS</a>
						</div>
					</div>
					</div>
				</div>
				<div id="photo2"></div>
			</main>
			<footer class="mt-3">
				<?php include 'footer.php' ?>
			</footer>
			<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="vendor/node_modules/jquery/dist/jquery.js"></script>
			<script type="text/javascript" src="apirest/ajax.js"></script>
</body>
</html>