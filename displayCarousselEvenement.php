<?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM evenement WHERE Date_Evenement > (Select Date( NOW())) LIMIT 3");
$requete->execute();
   

while($ligne=$requete->fetch()){

?>

<div class="carousel-item active"><img src= <?php echo $ligne["URL_PHoto"] ?> class="d-block w-100" alt="Evenement"> <div class="carousel-caption d-none d-md-block"> <h5><?php echo $ligne["Nom_Evenement"] ?></h5></div></div>
<?php
}

?>