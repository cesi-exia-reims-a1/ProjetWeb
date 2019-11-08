<!DOCTYPE html>
<html>
<head>
	<title>BDE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href ="style.css">
</head>
<body>
	<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.php"><img src="https://montpellier.cesi.fr/wp-content/uploads/sites/25/2018/11/Cesi_Logo_INGENIEUR_RVB-360x213.png" width="90" height="52" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="boutique.php">Boutique</a>
					<a class="nav-item nav-link active" href="evenement.php">Evenement</a>
					<a class="nav-item nav-link active" href="galerie.php">Galerie</a>
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
									<p class="font-small grey-text d-flex justify-content-end">Vous n'avez pas de comtpe? <a href="inscription.html" class="blue-text ml-1">S'inscrire</a></p>
								</div>
							</div>
							<!--/.Content-->
						</div>
					</div>
					<!-- Modal -->
					<div class="text-center">
						<a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm">Connexion</a>
					</div>
				</nav>
			</header>
		<main>
	
		</main>
		<footer>
			
		</footer>
	<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body
</html>