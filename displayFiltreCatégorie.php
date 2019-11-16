<?php
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
?>

<select class="form-control" name="produit">
    <option value="$bdd->prepare('SELECT * FROM produit');">Toutes les catégories</option>
    <option value="$bdd->prepare('SELECT * FROM produit WHERE Categorie_Produit = 'Alimentaire'');?>">Alimentaire</option>					
	<option value="$bdd->prepare('SELECT * FROM produit WHERE Categorie_Produit = 'goodies'');?>">Goodies</option>
</select>