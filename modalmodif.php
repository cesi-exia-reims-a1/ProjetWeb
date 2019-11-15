      <!-- création bouton prénom -->

      <div class="container">
    <form method="post" action="scriptboutique.php" autocomplete="on">
      <div id = "newarticle" class="form-group"> 
        <label for="Name_Produit">Nom du produit</label>
        <input type="text" class="form-control" id="Name_Produit"  Name = "Nom_Produit" placeholder="Nom du produit">
      </div>


      <!-- création bouton Prix_Produit-->

      <div id="newarticle" class="form-group">
        <label for="PriceProduct">Prix</label>
        <input type="text" class="form-control" id="PriceProduct" name="Prix_Produit"  placeholder="Prix du produit">
      </div>


     
     <!-- création Bouton ajouter photo -->

    <div id="newarticle" class="form-group">
         <input type="file" name="Photo_Produit" size=50  />
        </div>
  
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
    
    <!-- création bouton sélection de centre -->
 <div id="register" >
        <label for="centre">Centre</label>
        <select name="ID_Centre" id="centre" class="form-control">
         <option selected=""> -- Choisir votre centre --</option>
         <?php include('displayCentre.php')?>
       </select>
     </div>


    <!-- Bouton pour créer son compte-->
    <p class="addbutton"> 
      <input type="submit" value="Ajouter l'article"/> 
    </p>
