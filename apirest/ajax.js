// Exécute un appel AJAX GET

$(function (){
    var $articles = $('#articles');
    var $articles2 = $('#articles2');
    var $evenement = $('#evenement');
    var $evenement2 = $('#evenement2');
    var $photo = $('#photo');
    var $commentaire = $('#commentaire');
    var $participer = $('#participer');
    var $commande = $('#commande');
    var $personne = $('#personne');

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/produit',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, article) {
                $articles.append('<center><div class="container m-5"><div class="row"><div class="col-5"><img src=' + article.Photo_Produit + '></div><div class="col-5 align-self-center"><h1>' + article.Nom_Produit + '</h1></div><div class="col-2 align-self-center"><form method="post" action="scriptidproductmodify.php" autocomplete="on"><p class="addbutton"> <input type="hidden" name="id_produit" value=' + article.ID_Produit + '> <input type="submit" value="modifier" name ="ID_Produit"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/produit',
        dataType:'json',
        success: function(reponse2) {
            $.each(reponse2, function(i, article2) {
                $articles2.append('<center><div class="container"><div class="row"><div class="col-5"><img src=' + article2.Photo_Produit + '></div><div class="col-2 align-self-center"><h1>' + article2.Nom_Produit + '</h1></div><div class="col-1 align-self-center"><h4>' + article2.Supprime + '</h4></div><div class="col-2 align-self-center"><form method="post" action="scriptdeletearticle.php" autocomplete="on"><p class="addbutton"> <input type="hidden" name="id_produit" value=' + article2.ID_Produit + '> <input type="submit" value="Supprimer" name ="ID_Produit"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/evenement',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, evenement) {
                $evenement.append('<center><div class="container"><div class="row"><div class="col-5"><img src=' + evenement.URL_Photo + '></div><div class="col-2 align-self-center"><h1>' + evenement.Nom_Evenement + '</h1></div><div class="col-1 align-self-center"><h5>' + evenement.Signale + '</h5></div><div class="col-1 align-self-center"><h5>' + evenement.Supprime + '</h5></div><div class="col-2 align-self-center"><form method="post" action="scriptsuppressionevenement.php" autocomplete="on"><p class="addbutton"><input type="hidden" name="id_evenement" value=' + evenement.ID_Evenement + '> <input type="submit" value="Supprimer" name ="ID_Evenement"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/evenement',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, evenement) {
                $evenement2.append('<center><div class="container m-5"><div class="row"><div class="col-5"><img src=' + evenement.URL_Photo + '></div><div class="col-5 align-self-center"><h1>' + evenement.Nom_Evenement + '</h1></div><div class="col-2 align-self-center"><form method="post" action="scriptidevenementmodify.php" autocomplete="on"><p class="addbutton"><input type="hidden" name="id_evenement" value=' + evenement.ID_Evenement + '> <input type="submit" value="modifier" name ="ID_Evenement"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/photo',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, photo) {
                $photo.append('<center><div class="container"><div class="row"><div class="col-5"><img src=' + photo.URL_Photo + '></div><div class="col-1 align-self-center"><h5>' + photo.Signale + '</h5></div><div class="col-1 align-self-center"><h5>' + photo.Supprime + '</h5></div><div class="col-2 align-self-center"><form method="post" action="scriptdeletephoto.php" autocomplete="on"><p class="addbutton"> <input type="hidden" name="id_photo" value=' + photo.ID_Photo + '> <input type="submit" value="Supprimer" name ="ID_Photo"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/commentaire',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, commentaire) {
                $commentaire.append('<center><div class="container"><div class="row"><div class="col-1 align-self-center"><h5>' + commentaire.ID_Photo + '</h5></div><div class="col-1 align-self-center"><h5>' + commentaire.ID_Personne + '</h5></div><div class="col-6 align-self-center"><h5>' + commentaire.Texte + '</h5></div><div class="col-1 align-self-center"><h5>' + commentaire.Signale + '</h5></div><div class="col-1 align-self-center"><h5>' + commentaire.Supprime + '</h5></div><div class="col-2 align-self-center"><form method="post" action="scriptdeletecommentaire.php" autocomplete="on"><p class="addbutton"> <input type="hidden" name="id_commentaire" value=' + commentaire.ID_Commentaire + '> <input type="submit" value="Supprimer" name ="ID_Commentaire"/> </p></form></div></div></div></center>');
            });
        }
    });

  $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/personne',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, personne) {
                $personne.append('<center><div class="container"><div class="row"><div class="col-2 align-self-center"><h5>' + personne.Prenom_Personne + '</h5></div><div class="col-2 align-self-center"><h5>' + personne.Nom_Personne + '</h5></div><div class="col-2 align-self-center"><h5>' + personne.Status_Personne + '</h5></div><div class="col-2 align-self-center"><form method="post" action="scriptidstatusmodify.php" autocomplete="on"><p class="addbutton"><input type="hidden" name="id_personne" value=' + personne.ID_Personne + '> <input type="submit" value="modifier" name ="ID_Personne"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/participer',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, participer) {
                $participer.append('<center><div class="container"><div class="row"><div class="col-2 align-self-center"><h5>' + participer.Prenom_Personne + '</h5></div><div class="col-2 align-self-center"><h5>' + participer.Nom_Personne + '</h5></div><div class="col-4 align-self-center"><h5>' + participer.Nom_Evenement + '</h5></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/commande',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, commande) {
                $commande.append('<center><div class="container"><div class="row"><div class="col-2 align-self-center"><h5>' + commande.ID_Commande + '</h5></div><div class="col-2 align-self-center"><h5>' + commande.Prenom_Personne + '</h5></div><div class="col-2 align-self-center"><h5>' + commande.Nom_Personne + '</h5></div><div class="col-2 align-self-center"><h5>' + commande.Prix_Total + '€</h5></div></div></div></center>');
            });
        }
    });

});