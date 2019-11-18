<?php

$id = (isset($_POST['id_personne'])) ? ($_POST['id_personne']) : NULL;



?> <div class="container">
    <form method="post" action="scriptupdatestatus.php" autocomplete="on">
    
  <div >
    <input type="hidden" name="ID_Personne" value= <?php echo $id ?>>
  </div>

  

<!-- création bouton sélection de centre -->

<!-- création payant ou non -->

<div id="newevent" >
  <label for= "Status"></label>
  <select name="Status_Personne" id="Status" class="form-control">

   <option selected=""> -- Choisisez le status : 0 pour un étudiant, 1 pour un membre CESI, 2 pour un membre du BDE--</option>
   <option>0</option>
   <option>1</option>
   <option>2</option>
 </select>
</div>



<!-- Bouton pour créer son compte-->
<p class="addbutton"> 
  <input type="submit" value="modifiez le status"/> 
</p>
</div> 

</form>
</div>