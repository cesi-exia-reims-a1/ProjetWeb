
<form method="post" action="scriptEvenement.php" autocomplete="on">
 <!-- création bouton Nom-événement -->
 <div id = "newevent" class="form-group"> 
  <label for="Nom_Evenement">Nom du produit</label>
  <input type="text" class="form-control" id="Nom_Evenement"  Name = "Nom_Evenement" placeholder="Nom de l'événement">
</div>

<!-- création bouton Date_événement-->

<div id="newevent" class="form-group">
  <label for="Date_Evenement">Date événement</label>
  <input type="Date" class="form-control" id="PriceProduct" name="Date_Evenement"  placeholder="Date de l'événement">
</div>

<!-- création payant ou non -->

<div id="newevent" >
  <label for= "Payant">Payant</label>
  <select name="Payant" id="Pyant" class="form-control">

   <option selected=""> -- choisisez si l'event est payant --</option>
   <option>oui</option>
   <option>non</option>
 </select>
</div>

<!-- Prix événement -->
<div id="Priceevent" class="form-group">
  <label for="Prix_événement">Prix de l'événement</label>
  <input type="float" class="form-control" id="Prix_événement" name="Prix"  placeholder="Prix">
</div>   

<!-- récursif -->
<div id="newevent" >
  <label for= "Récursif">Récursif</label>
  <select name="Recursif" id="Récursif" class="form-control">

   <option selected=""> -- choisisez si l'event est récursif --</option>
   <option>oui</option>
   <option>non</option>
 </select>
</div>

<!-- création Bouton ajouter photo -->
<div id="newevent" class="form-group">
 <input type="file" name="URL_Photo" size=50  />
</div>


<!-- Bouton pour créer son compte-->
<p class="addbutton"> 
  <input type="submit" value="ajouter l'event"/> 
</p>
</div> 

</form>
</main> 

