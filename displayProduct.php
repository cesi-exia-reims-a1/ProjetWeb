 <?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete = $bdd->prepare("SELECT * FROM produit");
    $requete->execute();
   

while($ligne=$requete->fetch()){
    echo "<div class='displayprod'>
	<img src='" . $ligne['Photo_Produit'] . "', class='prodpic' />
		<div class='price'> ".$ligne['Prix_Produit']." </div>
		<div class='description'> ".$ligne['Nom_Produit']." </div>
	</div>";
}

?>