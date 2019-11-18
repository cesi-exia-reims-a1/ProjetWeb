<?php
session_start();
if($_SESSION['status'] == 2 ){
	
} else {
	header("Location: http://localhost/projetWeb/index.php");
}
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>

<!DOCTYPE html>
<html>
<head>
  <title>BDE --Administration</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href ="assets/css/style.css">
  
</head>
<body>
  <header>
    <?php include 'navbar.php' ?>
  </header>
      <main>
        <h1 class="text-center p-2">ADMINISTRATION DU SITE</h1>
        <div id="adminBouton" class="container-fluid p-5">
          <div class="row p-5">
            <div class="col">
              <a id="boutonAdmin" class= "border border-secondary text-center p-5" href="adminboutique.php">BOUTIQUE</a>
            </div>
            <div class="col"> 
              <a id="boutonAdmin" class= "border border-secondary text-center p-5" href="adminEvenement.php">EVENEMENTS</a>
            </div>
            <div class="col">
              <a id="boutonAdmin" class= "border border-secondary text-center p-5" href="adminPhotoCommentaire.php">PHOTOS + COMMENTAIRES</a>
            </div>
            <div class="col">
              <a id="boutonAdmin" class= "border border-secondary text-center p-5" href="adminUtilisateur.php">UTILISATEURS</a>
            </div>
          </div>
          </div>
        </div>
        <div class="container">
        <form method="post" action="scriptEvenement.php" autocomplete="on">
 <!-- création bouton Nom-événement -->
 <div id = "newevent" class="form-group"> 
  <label for="Nom_Evenement">Nom du produit</label>
  <input type="text" class="form-control" id="Nom_Evenement"  Name = "Nom_Evenement" placeholder="Nom de l'évènement">
</div>

<!-- création bouton Date_événement-->

<div id="newevent" class="form-group">
  <label for="Date_Evenement">Date événement</label>
  <input type="Date" class="form-control" id="PriceProduct" name="Date_Evenement"  placeholder="Date de l'événement">
</div>

<!-- création bouton sélection de centre -->
 <div id="register" >
        <label for="centre">Centre</label>
        <select name="ID_Centre" id="centre" class="form-control">
         <option selected=""> -- Choisir votre centre --</option>
         <?php include('displayCentre.php')?>
       </select>
     </div>
<!-- création payant ou non -->

<div id="newevent" >
  <label for= "Payant">Payant</label>
  <select name="Payant" id="Pyant" class="form-control">

   <option selected=""> -- choisisez si l'event est payant --</option>
   <option>oui</option>
   <option>non</option>
 </select>
</div>

<!-- Prix événement -->
<div id="Priceevent" class="form-group">
  <label for="Prix_événement">Prix de l'événement</label>
  <input type="float" class="form-control" id="Prix_événement" name="Prix"  placeholder="Prix">
</div>   

<!-- récursif -->
<div id="newevent" class="mb-4">
  <label for= "Récursif">Récursif</label>
  <select name="Recursif" id="Récursif" class="form-control">
   <option selected=""> -- choisisez si l'event est récursif --</option>
   <option>oui</option>
   <option>non</option>
 </select>
</div>

<!-- création Bouton ajouter photo -->
<div id="newevent" class="form-group">
 <input type="file" name="URL_PHoto" size=50  />
</div>

<div id="descriptionevent" class="form-group">
  <label for="Description_Evenement">Description de l'événement</label>
  <input type="text" class="form-control" id="Description_Evenement" name="Description_Evenement"  placeholder="Entrez une description">
</div>   


<!-- Bouton pour créer son compte-->
<p class="addbutton"> 
  <input type="submit" value="ajouter l'event"/> 
</p>
</div> 

</form>
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