<nav class="navbar navbar-expand-lg navbar-light" style="background-color: skyblue;">
			<a class="navbar-brand" href="index.php"><img src="https://montpellier.cesi.fr/wp-content/uploads/sites/25/2018/11/Cesi_Logo_INGENIEUR_RVB-360x213.png" width="90" height="52" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse d-flex bd-highlight" id="navbarNavAltMarkup">
					<div class="bd-highlight"/><a href="boutique.php" class="nav-item nav-link active text-dark">Boutique</a></div>
					<div class="bd-highlight"/><a href="evenement.php" class="nav-item nav-link active text-dark">Evenement</a></div>
					<div class="bd-highlight"/><a href="galerie.php" class="nav-item nav-link active text-dark">Galerie</a></div>
                    <div class="ml-auto bd-highlight border border-secondary" id="panier" /><a href="panier.php" class="nav-item nav-link active text-dark">Panier</a></div>
					<?php
					 if (!isset($_SESSION['pseudo'])){
						 echo "<div class='bd-highlight'/><a href='' class='btn btn-default btn-rounded' data-toggle='modal' data-target='#elegantModalForm'>Connexion</a></div><div class='modal fade' id='elegantModalForm' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
						 <div class='modal-dialog' role='document'>
							 <!--Content-->
							 <div class='modal-content form-elegant'>
								 <!--Header-->
								 <div class='modal-header text-center'>
									 <h3 class='modal-title w-100 dark-grey-text font-weight-bold my-3' id='myModalLabel'><strong>Connexion</strong></h3>
									 <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
										 <span aria-hidden='true'>&times;</span>
									 </button>
								 </div>
								 <!--Body-->
								 <div class='modal-body mx-4'>
									 <!--Body-->
									 <form method='post' action='scriptConnexion.php' autocomplete='on'>
										 <div id='login' class='md-form mb-5'>
											 <input type='email' id='email' name= 'Adresse_eMail' class='form-control validate'>
											 <label data-error='wrong' required ='required' data-success='right' for='email'>Email</label>
										 </div>
										 <div class='md-form pb-3'>
											 <input type='password' id='password' name ='Mot_De_Passe' class='form-control validate'>
											 <label data-error='wrong' data-success='right' required ='required' for='password'>Mot de passe</label>
										 </div>
										 <div class='text-center mb-3'>
											 <input type='submit' value ='login' class='btn blue-gradient btn-block btn-rounded z-depth-1a'>
										 </div>
									 </form>
								 </div>
 
 
								 <!--Footer-->
								 <div class='modal-footer mx-5 pt-3 mb-1'>
									 <p class='font-small grey-text d-flex justify-content-end'>Vous n'avez pas de comtpe? <a href='inscription.php' class='blue-text ml-1'>S'inscrire</a></p>
								 </div>
							 </div>
							 <!--/.Content-->
						 </div>";
					 } else {
						echo "<div class='bd-highlight'/><a href='Deconnexion.php' class='btn btn-default btn-rounded'>Deconnexion</a></div>";
					 }
					 ?>
				</nav>