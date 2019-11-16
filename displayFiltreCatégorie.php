<?php
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
?>

<select class="form-control" name="produit">
    <option value="0">Toutes les catégories</option>
		<?php
		$requete = $bdd->prepare("SELECT * FROM produit");
		//$requete->execute();  
		//$requete->fetch()
		?>
    <option value="">Alimentaire</option>					
    	<?php
    	$requete = $bdd->prepare("SELECT * FROM produit WHERE Categorie_Produit = 'Alimentaire'");
		//$requete->execute();  
		//$requete->fetch()
		?>
	<option value="">Goodies</option>					
    	<?php
    	$requete = $bdd->prepare("SELECT * FROM produit WHERE Categorie_Produit = 'goodies'");
		//$requete->execute();  
		//$requete->fetch()
		?>
</select>