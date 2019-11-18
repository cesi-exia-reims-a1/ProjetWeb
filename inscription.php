<?php
session_start();
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
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
      <a class="navbar-brand" href="index.php"><img src="https://montpellier.cesi.fr/wp-content/uploads/sites/25/2018/11/Cesi_Logo_INGENIEUR_RVB-360x213.png" width="90" height="52" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
         <a class="nav-item nav-link active" href="boutique.php">Boutique</a>
         <a class="nav-item nav-link active" href="evenement.php">Evenement</a>
         <a class="nav-item nav-link active" href="galerie.php">Galerie</a>
       </div>
     </div>
   </nav>
 </header>
 <main>
  <div class="container">
    <h4 class="card-title mt-3 text-center">Inscription</h4>

    <!-- création bouton nom -->

    <form method="post" action="scriptInscription.php" autocomplete="on">
      <div id = "register" class="form-group"> 
        <label for="usernamesignup">Nom</label>
        <input type="text" class="form-control" id="usernamesignup" maxlength="30" Name = "Nom_Personne" placeholder="Nom">
      </div>


      <!-- création bouton prénom -->

      <div id="register" class="form-group">
        <label for="Namesignup">Prénom</label>
        <input type="text" class="form-control" id="Namesignup" name="Prenom_Personne" maxlength="12" placeholder="Prenom">
      </div>
      <!-- création menu défilant campus -->

      <div id="register" >
        <label for="centre">Centre</label>
        <select name="ID_Centre" id="centre" class="form-control">
         <option selected=""> -- Choisir votre centre --</option>
         <?php include('displayCentre.php')?>
       </select>
     </div>

     <!-- création Bouton adresse mail -->

     <div id =register class="form-group">
      <label for="Inputemail">Adresse email</label>
      <input type="email" class="form-control" id="InputEmail" Name="Adresse_eMail" placeholder="Adresse mail">
    </div>

    <!-- création Bouton Mot de passe -->

    <div id="register" class="form-group">
      <label for="passwordsignup">Mot de passe</label>
      <input type="password" class="form-control" id="passwordsignup" name="Mot_De_Passe" maxlength="12" placeholder="Mot de passe">
      <small id="emailHelp" class="form-text text-muted">Mettre au minimum une majuscule et un chiffre !</small>
    </div>


      <input type="checkbox" name="cgu" class="form-check-input" id="exampleCheck1" required="required">
      <label class="form-check-label" for="exampleCheck1">Cliquer ici pour accepter les <a href="mentionslégales.php">mentions légales</a> </label>
 

    <!-- Bouton pour créer son compte-->
      <p class="signin button"> 
       <input type="submit" value="S'inscrire" id="submitButton"  />
    </p>


  </form>
</main> 

<footer  class="mt-3">
  <?php include 'footer.php' ?>
</footer>
<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="./vendor/node_modules/jquery/dist/jquery.js"></script>
<script src="./apirest/ajax.js"></script>
<script type="text/javascript" src="asets/js/javascript.js"></script>
</div>
</body>
</html>