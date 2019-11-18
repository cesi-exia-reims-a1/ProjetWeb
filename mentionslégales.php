<?php
session_start();
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
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
<header>
	<?php include 'navbar.php' ?>
</header>
<body>
	<div class="container">
	<h1 class="p-5"> Mentions légales</h1>
	<h4>1- Protection des données personnelles : </h4></br>

<h5>Conformément à la loi Informatique et Libertés du 6 janvier 1978, vous disposez d’un droit d’accès, de rectification et d'opposition sur les données vous concernant auprès du BDE reims. Vous pouvez exercer ce droit en nous envoyant un courrier à l'adresse suivante : </br>

support.bde@viacesi.fr </br>

Le traitement automatisé d'informations nominatives sur le site du BDE a été déclaré auprès de la Commission Nationale de l'Informatique et des Libertés sous le numéro 1722197. </br>

Notre site internet utilise des cookies. Il s’agit de petits fichiers texte enregistrés sur votre disque dur. </br>

Les données collectées sont destinées à l'usage de BDE reims, elles permettent ou facilitent votre navigation et sont nécessaires au fonctionnement de notre boutique en ligne. </br>

L’utilisation de cookies nécessite un consentement exprès de votre part. Vous pouvez manifester votre consentement ou vous opposer à l’utilisation des cookies en paramétrant votre dispositif de connexion de manière appropriée. Reportez-vous pour cela notamment au guide d’utilisation de votre navigateur. 
</h5>
<h4 class="pt-5">2- CGV : </h4></br>
<a href="conditionsGénéralesD'utilisation.php" class="text-dark"><h4>Accédez à nos Conditions Générales d'Utilisation</h4></a></p>
</div>
</body>
<main>
</main>
	<footer class="mt-3">
		<?php include 'footer.php' ?>
	</footer>
</html>