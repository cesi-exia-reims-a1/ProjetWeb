<!DOCTYPE html>
<html>
<head>
	<title>BDE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href ="style.css">
</head>
<body id="inscription">
	<header>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #DBDBDB;">
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
        <label for= "Choose_center">Choose a center</label>
        <select name="Centre_Personne" id="Choose_center" class="form-control">
      
         <option selected=""> -- Choisir votre centre --</option>
         <option>Lille</option>
         <option>Aras</option>
         <option>Rouen</option>
         <option>Caen</option>
         <option>Brest</option>
         <option>Paris Nanterre</option>
         <option>Reims</option>
         <option>Nancy</option>
         <option>Strasbourg</option>
         <option>Le Mans</option>
         <option>Orléans</option>
         <option>Sait-Nazaire</option>
         <option>Nantes</option>
         <option>Châteauroux</option>
         <option>Dijon</option>
         <option>La Rochelle</option>
         <option>Angoulême</option>
         <option>lyon</option>
         <option>Grenoble</option>
         <option>Bordeaux</option>
         <option>Pau</option>
         <option>Toulouse</option>
         <option>Montpellier</option>
         <option>Aix-en-Provence</option>
         <option>Nice</option>
       </select>
     </div>
     
     <!-- création Bouton adresse mail -->

     <div id =register class="form-group">
      <label for="Inputemail">Adresse email</label>
      <input type="email" class="form-control" id="InputEmail" Name="Adresse_eMail" placeholder="Adresse mail">
    </div>

    <!-- création Bouton Mot de passe -->

    <div id="register" class="form-group">
      <label for="passwordsignup">Password</label>
      <input type="password" class="form-control" id="passwordsignup" name="Mot_De_Passe" maxlength="12" placeholder="Mot de passe">
      <small id="emailHelp" class="form-text text-muted">Mettre au minimum une majuscule et un chiffre !</small>
    </div>

    <div id="bloc_diparition"class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Cliquer ici pour accepter les <a href="mentions légales.html">mentions légales</a> </label>
    </div>

    <!-- Bouton pour créer son compte-->
    <div id="bloc_apparaitre">    
      <p class="signin button"> 
      <input type="submit" value="S'inscrire"/> 
    </p>
  </div>

  </form>
</main> 



<footer>
  
</footer>
<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script>function affiche_bloc(CheckBox) {
        if (CheckBox.checked) 
        {
            document.getElementById("block_apparaitre").style.display="block";
        }
        else
        {
            document.getElementById("bloc_disparaitre").style.display="none";
        }
}</script>
</div>
</body>
</html>