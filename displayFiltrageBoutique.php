<?php
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
?>

<select class="form-control" name="produit">
    <option value="0">Aucun filtre</option>
		<?php
		$requete = $bdd->prepare("SELECT * FROM produit");
		$requete->execute();  
		$requete->fetch()
		?>
    <option value="">Trier par Prix Croissant</option>					
    	<?php
    	$requete = $bdd->prepare("SELECT * FROM produit ORDER BY Prix_Produit ASC");
		$requete->execute();  
		$requete->fetch()
		?>
	<option value="">Trier par Prix Décroissant</option>					
    	<?php
    	$requete = $bdd->prepare("SELECT * FROM produit ORDER BY Prix_Produit DESC");
		$requete->execute();  
		$requete->fetch()
		?>
</select>