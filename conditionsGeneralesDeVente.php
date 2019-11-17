<?php
session_start();
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Conditions générales de vente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
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