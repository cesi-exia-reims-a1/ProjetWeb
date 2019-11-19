<?php
include('bdd.php');
$requete = $bdd->prepare("SELECT DISTINCT Categorie_Produit FROM produit");
$requete->execute();  

//var_dump($_POST);
$categories = [];
while($data = $requete->fetch()){
	$categories[] = $data;
	if(isset($_POST['categories']) && $_POST['categories'] == $data['Categorie_Produit'])
		$categories[count($categories)-1]['checked'] = true;
	else
		$categories[count($categories)-1]['checked'] = false;
		//pour récupérer le dernier objet créé dans le tableau
} ?>



<form action="boutique.php" method="post">
 	<select class="filtreBouton" name="prix" onchange="this.parentNode.submit()">
		<option value="no-prix" selected="selected">-- Choisir un filtre --</option>
		<option value="asc" <?php if(isset($_POST['prix']) && $_POST['prix'] == 'asc'){
				echo 'selected'; } ?>>Filtrer par prix croissant</option>
		<option value="desc" <?php if(isset($_POST['prix']) && $_POST['prix'] == 'desc'){
				echo 'selected'; } ?>>Filtrer par prix décroissant</option> 
	</select> 
	<select class="filtreBouton" name="categories" onchange="this.parentNode.submit()">
		<option value="no-cat">-- Choisir une catégorie --</option> 
		<?php foreach($categories as $categorie) { ?>
			<option <?php 
				if($categorie['checked'])
					echo 'selected';
			?>
			>
			<?php echo $categorie["Categorie_Produit"]; ?></option> 
		<?php } ?>
	</select>
</form>
