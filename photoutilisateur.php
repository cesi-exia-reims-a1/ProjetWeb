
<main>
  <div class="container">
    <h4 class="card-title mt-3 text-center">poster une photo</h4>

    <!-- création bouton nom -->

    <form method="post" action="scriptajoutphoto.php" autocomplete="on">
      <div id = "register" class="form-group"> 
        <label for="usernamesignup">Nom</label>
        <input type="text" class="form-control" id="usernamesignup" maxlength="30" Name = "Nom_Personne" placeholder="Nom">
      </div>


      <!-- création bouton prénom -->

      <div id="register" class="form-group">
        <label for="Namesignup">Prénom</label>
        <input type="text" class="form-control" id="Namesignup" name="Prenom_Personne" maxlength="12" placeholder="Prenom">
      </div>
      <!-- création menu défilant campus -->

      <div id="register" >
        <label for="centre">Centre</label>
        <select name="ID_Centre" id="centre" class="form-control">
         <option selected=""> -- Choisir votre centre --</option>
       </select>
     </div>

     <!-- création Bouton adresse mail -->

     <div id =register class="form-group">
      <label for="Inputemail">Adresse email</label>
      <input type="email" class="form-control" id="InputEmail" Name="Adresse_eMail" placeholder="Adresse mail">
    </div>

    <!-- création Bouton Mot de passe -->

    <div id="register" class="form-group">
      <label for="passwordsignup">Mot de passe</label>
      <input type="password" class="form-control" id="passwordsignup" name="Mot_De_Passe" maxlength="12" placeholder="Mot de passe">
      <small id="emailHelp" class="form-text text-muted">Mettre au minimum une majuscule et un chiffre !</small>
    </div>


      <input type="checkbox" name="cgu" class="form-check-input" id="exampleCheck1" required="required">
      <label class="form-check-label" for="exampleCheck1">Cliquer ici pour accepter les <a href="mentions légales.html">mentions légales</a> </label>
 

    <!-- Bouton pour créer son compte-->
      <p class="signin button"> 
       <input type="submit" value="S'inscrire" id="submitButton"  />
    </p>


  </form>
</main> 