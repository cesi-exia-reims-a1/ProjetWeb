// Exécute un appel AJAX GET

$(function (){
    var $articles = $('#articles');
    var $articles2 = $('#articles2');
    var $evenement = $('#evenement');
    var $evenement2 = $('#evenement2');
    var $photo = $('#photo');
    var $photo2 = $('#photo2');
    var $participant = $('#participant');
    var $commande = $('#commande');
    var $personne = $('#personne');

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/produit',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, article) {
                $articles.append('<center><div class="container m-5"><div class="row"><div class="col-5"><img src=' + article.Photo_Produit + '></div><div class="col-5 align-self-center"><h1>' + article.Nom_Produit + '</h1></div><div class="col-2 align-self-center"><form method="post" action="scriptupdateboutique.php" autocomplete="on"><p class="addbutton"> <input type="submit" value="Modifier"/> </p></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/produit',
        dataType:'json',
        success: function(reponse2) {
            $.each(reponse2, function(i, article2) {
                $articles2.append('<center><div class="container m-5"><div class="row"><div class="col-5"><img src=' + article2.Photo_Produit + '></div><div class="col-5 align-self-center"><h1>' + article2.Nom_Produit + '</h1></div><div class="col-2 align-self-center"><form method="post" action="scriptdeletearticle.php" autocomplete="on"><p class="addbutton"> <input type="submit" value="Supprimer"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/evenement',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, evenement) {
                $evenement.append('<center><div class="container m-5"><div class="row"><div class="col-5"><img src=' + evenement.URL_Photo + '></div><div class="col-5 align-self-center"><h1>' + evenement.Nom_Evenement + '</h1></div><div class="col-2 align-self-center"><form method="post" action="scriptsuppressionevenement.php" autocomplete="on"><p class="addbutton"><input type="submit" value="Supprimer"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/evenement',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, evenement) {
                $evenement2.append('<center><div class="container m-5"><div class="row"><div class="col-5"><img src=' + evenement.URL_Photo + '></div><div class="col-5 align-self-center"><h1>' + evenement.Nom_Evenement + '</h1></div><div class="col-2 align-self-center"><form method="post" action="scriptupdateevenement.php" autocomplete="on"><p class="addbutton"><input type="submit" value="Modifier"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/photo',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, photo) {
                $photo.append('<center><div class="container m-5"><div class="row"><div class="col-5"><img src=' + photo.URL_Photo + '></div><div class="col-2 align-self-center"><form method="post" action="scriptdeletephoto.php" autocomplete="on"><p class="addbutton"> <input type="submit" value="Supprimer"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/photo',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, photo) {
                $photo2.append('<center><div class="container m-5"><div class="row"><div class="col-5"><img src=' + photo.URL_Photo + '></div><div class="col-2 align-self-center"><form method="post" action="scriptdeletecommentaire.php" autocomplete="on"><p class="addbutton"> <input type="submit" value="Supprimer"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/personne',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, personne) {
                $personne.append('<center><div class="container m-5"><div class="row"><div class="col-2 align-self-center"><h2>' + personne.Prenom_Personne + '</h2></div><div class="col-2 align-self-center"><h2>' + personne.Nom_Personne + '</h2></div><div class="col-2 align-self-center"><h2>' + personne.Status_Personne + '</h2></div><div class="col-2 align-self-center"><form method="post" action="scriptupdateevenement.php" autocomplete="on"><p class="addbutton"><input type="submit" value="Modifier"/> </p></form></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/:evenement/participant',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, partcipant) {
                $partcipant.append('<center><div class="container m-5"><div class="row"><div class="col-2 align-self-center"><h2>' + participant.Prenom_Personne + '</h2></div><div class="col-2 align-self-center"><h2>' + participant.Nom_Personne + '</h2></div><div class="col-2 align-self-center"><h2>' + participant.Nom_Evenement + '</h2></div></div></div></center>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/api/commande',
        dataType:'json',
        success: function(reponse) {
            $.each(reponse, function(i, commande) {
                $commande.append('<center><div class="container m-5"><div class="row"><div class="col-2 align-self-center"><h2>' + commande.ID_Commande + '</h2></div><div class="col-2 align-self-center"><h2>' + commande.Prenom_Personne + '</h2></div><div class="col-2 align-self-center"><h2>' + commande.Nom_Personne + '</h2></div></div></div></center>');
            });
        }
    });

});