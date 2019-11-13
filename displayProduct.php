 <?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete = $bdd->prepare("SELECT * FROM produit");
    $requete->execute();  

while($ligne=$requete->fetch()){

?>
<div class="container-fluid col-3 border border-secondary m-5"><center><img src=<?php echo $ligne['Photo_Produit']?>><center> <h2> <?php echo $ligne['Nom_Produit']?> </h2><h3> <?php echo  $ligne['Prix_Produit']?> €</h3></div>
<?php
}
?>