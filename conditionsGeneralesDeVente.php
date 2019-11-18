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
    <center><div class="container">
        <img src="assets/image/conditionsGeneralesDevente1.png" alt="conditionsGeneralesDevente1">
        <img src="assets/image/conditionsGeneralesDevente2.png" alt="conditionsGeneralesDevente2">
    </div>
    </center>
</body>
<main>
</main>
<footer class="mt-3">
    <?php include 'footer.php' ?>
</footer>

</html>