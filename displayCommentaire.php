<?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

if(isset($_POST['submit_commentaire'])) {
    if(isset($_POST['commentaire']) AND !empty($_POST['commentaire']
    )){

    } else {
        $c_erreur = "Le champ commentaire est vide";
    }
}
?>
<h2>Commentaires:</h2>
<form method="POST">
   <textarea name="commentaire" placeholder="Votre commentaire..."></textarea><br />
   <input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
</form>
<?php if(isset($c_erreur)) { echo $c_erreur; } ?>