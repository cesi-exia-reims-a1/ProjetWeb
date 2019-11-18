<?php
session_start();

if(isset($_SESSION['centre'])){
	
} else {
	header("Location: http://localhost/projetWeb/choixCentre.php");
}

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

if (!isset($_GET['id_photo'])){
	header('HTTP/1.0 404 Not Found');
	exit;
} else {
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>BDE-Site officiel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="description" content="Site du BDE, ici vous pourrez acheté des produits en fonction de votre centre, participer à des évenements, poster, liker et commenter des photos" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

</head>
<body>
<header>
		<?php include 'navbar.php' ?>
	</header>
	<main>
		<div class="card-deck container-fluid mt-4">
			<?php include('displayInfoPhoto.php')?>
		</div>
		<div class="container">
		</div>
		<div class="container">
			<h2 class="commentaire p-4">Commentaires :</h2>
			<?php include('displayCommentaire.php')?>
			<?php include('displayAjoutCommentaire.php')?>
		</div>
	</main>

	<footer class="mt-3">
		<?php include 'footer.php' ?>
	</footer>
	<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="asets/js/javascript.js"></script>
</body>
</html>