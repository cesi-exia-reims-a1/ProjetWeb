<?php


$idProduct = (isset($_POST['id_produit'])) ? ($_POST['id_produit']) : NULL;

?> <div class="container">
    <form method="post" action="scriptupdateboutique.php" autocomplete="on">
      
  <div >
    <input type="hidden" name="ID_Produit" value= <?php echo $idProduct ?>>
  </div>

      <!-- création bouton Prix_Produit-->

      <div id="newarticle" class="form-group">
        <label for="PriceProduct">Prix</label>
        <input type="text" class="form-control" id="PriceProduct" name="Prix_Produit"  placeholder="Prix du produit">
      </div>


     
     <!-- création Bouton ajouter photo -->



  
    <!-- création Descriptif produit -->
      <div id="newarticle" >
        <label for= "Choose_Product">Catégorie</label>
        <select name="Categorie_Produit" id="Choose_Product" class="form-control">
      
         <option selected=""> -- Choisisez la catégorie du produit --</option>
         <option>Alimentaire</option>
         <option>goodies</option>
       </select>
     </div>


    <div id="newarticle" class="form-group">
      <label for="Product_information">Description</label>
      <input type="text" class="form-control" id="Product_information" name="Descriptif_Produit"  placeholder="Descriptif du produit">
    </div>

    <!-- Bouton pour créer son compte-->
    <p class="addbutton"> 
      <input type="submit" value="modifier l'article"/> 
    </p>
  </form>
</div>
