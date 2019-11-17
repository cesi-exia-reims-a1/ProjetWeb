 <?php
//CEST MAL IL FAUT UN FICHIER bdd.php et include ça partout plutot que c/c cette ligne
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

//var_dump($_POST);

//ici en fonction de mes valeurs je vais modifier la requete
//Si c'est vide c'est qu'il n'y a pas de filtre
//Si $_POST['categories'] vaut qque chose on peut filtrer
if(isset($_POST['categories']) && $_POST['categories'] != 'no-cat' && isset($_POST['prix']) && $_POST['prix'] == 'asc'){//si on a un prix croissant + un filtre de catégorie
	$requete = $bdd->prepare("SELECT * FROM produit WHERE Categorie_Produit = :categorie AND Prix_Produit > :prixAsc ORDER BY Prix_Produit ASC");
	$requete->bindParam('categorie', $_POST['categories'], PDO::PARAM_STR);
	$requete->bindParam('prixAsc', $_POST['prix'], PDO::PARAM_STR);
	$requete->execute();
	$requete->execute();
}
else if(isset($_POST['categories']) && $_POST['categories'] != 'no-cat' && isset($_POST['prix']) && $_POST['prix'] == 'desc'){//si on a un prix décroissant + un filtre de catégorie
	$requete = $bdd->prepare("SELECT * FROM produit WHERE Categorie_Produit = :categorie AND Prix_Produit > :prixDesc ORDER BY Prix_Produit DESC");
	$requete->bindParam('categorie', $_POST['categories'], PDO::PARAM_STR);
	$requete->bindParam('prixDesc', $_POST['prix'], PDO::PARAM_STR);
	$requete->execute();
	$requete->execute();
}
else if(isset($_POST['prix']) && $_POST['prix'] == 'asc'){//si on a que un filtre de prix croissant
	$requete = $bdd->prepare("SELECT * FROM produit ORDER BY Prix_Produit ASC");
	$requete->bindParam('prixAsc', $_POST['prix'], PDO::PARAM_STR);
	$requete->execute();
	$requete->execute();
}
else if(isset($_POST['prix']) && $_POST['prix'] == 'desc'){//si on a que un filtre de prix décroissant
	$requete = $bdd->prepare("SELECT * FROM produit ORDER BY Prix_Produit DESC");
	$requete->bindParam('prixDesc', $_POST['prix'], PDO::PARAM_STR);
	$requete->execute();
	$requete->execute();
}
else if(isset($_POST['categories']) && $_POST['categories'] != 'no-cat'){//Si on a que un filtre de catégorie
	$requete = $bdd->prepare("SELECT * FROM produit WHERE Categorie_Produit = :categorie");
	$requete->bindParam('categorie', $_POST['categories'], PDO::PARAM_STR);
	$requete->execute();
} else{
	$requete = $bdd->prepare("SELECT * FROM produit");
	$requete->execute();
}

?>
	<form method="POST" action="displayFiltreCatégorie.php">
		<div class="container-fluid">
			<div class="row justify-items-center">
				<?php while($ligne=$requete->fetch()){ ?>
					<div id="caseProduit" class="col border border-secondary text-center m-5">
						<a class="nolink" href="produit.php?id_produit=<?php echo $ligne['ID_Produit']?>">
						<img src=<?php echo $ligne['Photo_Produit']?>>
						<h2> <?php echo $ligne['Nom_Produit']?> </h2>
						<h3> <?php echo $ligne['Prix_Produit']?> €</h3>
						</a>
					</div>
				<?php
				} ?>
			</div>
		</div>
	</form>