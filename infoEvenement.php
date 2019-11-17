<?php
session_start();

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

if (!isset($_GET['id_evenement'])){
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<header>
		<?php include 'navbar.php' ?>
	</header>
	<main>
		<?php include('displayInfoEvent.php')?>		
		<div class="container">
			<?php if(isset($_SESSION['status']) && $_SESSION['status'] == 1){ ?>
				<form method="post" action="signalemntevenement.php">
					<p class="signin button mb-0"> 
						<input type="hidden" value="<?php echo $idEvent ?>" name="id_event">
						<input type="submit" value="Signaler" name="Signaler" id="submitButton">
					</p>
				</form>
				<?php  
			} ?>
			<div class="card">
				<img class="card-img-top img-fluid" src=<?php echo $ligne['URL_Photo'] ?>>
				<div class="card-body">
					<h3 class="card-title"><?php echo $ligne['Nom_Evenement']?></h3>
					<h4><?php echo $ligne['Date_Evenement']?></h4>
					<h5><?php echo $ligne['Prix']?> €</h5>

				</div>
				<p class="card-text container-fluid"><?php echo $ligne['Description_Evenement']?></p>
				<div class="container-fluid">
					<div class="row">
						<div class="col-5">
							<?php include("displayInscription.php")?>
						</div>						   
						<div class="col-3"></div>
						<?php include('displayAjoutPhoto.php')?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="py-5 container-fluid" style="margin-top:2em;">
		<div class="row ">
			<?php include('displayPhoto.php')?>
		</div>
	</div>
</main>
<footer class="mt-3">
	<?php include 'footer.php' ?>
</footer>
<script src="http://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script type="text/javascript" src="asets/js/javascript.js"></script>
</body>
</html>
