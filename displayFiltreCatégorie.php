<?php
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
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
}
//il faut faire en sorte de re-selectionner celui qui est actuellement utilisé
//var_dump($categories);
$requete2 = $bdd->prepare("SELECT DISTINCT Prix_Produit FROM produit");
$requete2->execute();  

//var_dump($_POST);
$prix = [];
while($data2 = $requete2->fetch()){
	$prix[] = $data2;
	if(isset($_POST['prix']) && $_POST['prix'] == $data2['Prix_Produit'])
		$prix[count($prix)-1]['checked'] = true;
	else
		$prix[count($prix)-1]['checked'] = false;
		//pour récupérer le dernier objet créé dans le tableau
}
//il faut faire en sorte de re-selectionner celui qui est actuellement utilisé
//var_dump($categories);
?>



<form action="boutique.php" method="post">
<!-- 	<select class="filtreBouton" name="prix" onchange="this.parentNode.submit()">
	<option value="no-prix" />-- Choisir un filtre --</option> 
	<?php
		//if(isset($_POST['prixAsc']))
		//foreach($prix as $prixAsc) { ?>
		//<option <?php 
		//	if($prixAsc['checked'])
		//		echo 'selected';
		//?>
		//>
		//<?php ////echo $prixAsc["Prix_Produit"]; ?> 
		//<?php// } ?>
		//<?php
		//elseif(isset($_POST['prixDesc']))
		//foreach($prix as $prixDesc) { ?>
		//<option <?php 
		//	if($prixDesc['checked'])
		//		echo 'selected';
		//?>
		//>
		//<?php //echo $prixAsc["Prix_Produit"]; ?> 
		//<?php //} ?>
		//<?php
		//else
		//	echo "0"; ?>
</option>
</select> -->
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
