<?php

if (isset($_SESSION['pseudo'])){?>
    <form action="scriptAjoutPanier.php?id_produit=<?php echo $ligne['ID_Produit']?>" method="post">
							<div class="col" id="Quantite">
								<h3>Prix unitaire : <?php echo $ligne['Prix_Produit']?> €</h3>
								<label for="Quantite"></label>
								<h3>Quantité :</h3>
								<input type="float" id="Quantite" class="form-control" name="Nombre_Article"  placeholder="Quantité">
								<div class="m-5">
								<input class="p-3" type="submit" value="Ajouter au panier"/>
								</div>
							</div>
							</form>
<?php
}; 
?>