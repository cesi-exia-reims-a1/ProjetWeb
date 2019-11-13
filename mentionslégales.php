<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="C:\wamp64\www\ProjetWeb\assets\inscription bde.css">
	<title> Mentions légales</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
<body>
	<h1> Mentions légales</h1>
	<p>1- Protection des données personnelles : </br>

Conformément à la loi Informatique et Libertés du 6 janvier 1978, vous disposez d’un droit d’accès, de rectification et d'opposition sur les données vous concernant auprès du BDE reims. Vous pouvez exercer ce droit en nous envoyant un courrier à l'adresse suivante : </br>

corentin.negrier@viacesi.fr </br>

Le traitement automatisé d'informations nominatives sur le site Showroomprive.com a été déclaré auprès de la Commission Nationale de l'Informatique et des Libertés sous le numéro 1722197. </br>

Notre site internet utilise des cookies. Il s’agit de petits fichiers texte enregistrés sur votre disque dur. </br>

Les données collectées sont destinées à l'usage de BDE reims, elles permettent ou facilitent votre navigation et sont nécessaires au fonctionnement de notre boutique en ligne. </br>

L’utilisation de cookies nécessite un consentement exprès de votre part. Vous pouvez manifester votre consentement ou vous opposer à l’utilisation des cookies en paramétrant votre dispositif de connexion de manière appropriée. Reportez-vous pour cela notamment au guide d’utilisation de votre navigateur. 
</p>
<p>2- CGV : </br>
<a href="C:\wamp64\www\ProjetWeb\conditions de vente.html"> Accédez à nos CGV </a></p>
</body>
</html>