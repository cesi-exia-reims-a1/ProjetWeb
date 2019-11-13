// Exécute un appel AJAX GET

$(function (){
    var $articles = $('#articles');
    var $evenement = $('#evenement');
    var $centres = $('#centre');

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost/projetweb/displayProduct.php',
        success: function(articles) {
            $.each(articles, function(i, article) {
                $articles.append('<div class="container-fluid col-3 border border-secondary m-5"><center><img src=' + article.Photo_Produit + '><center><h2>' + article.Nom_Produit + '</h2><h3>' + article.Prix_Produit + '€</h3></div>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/evenement',
        success: function(evenements) {
            $.each(evenements, function(i, evenement) {
                $evenement.append('<img src=' + evenement.URL_PHoto + ' class="d-block w-100" alt="Evenement"> <div class="carousel-caption d-none d-md-block"> <h5>' + evenement.Nom_Evenement + ' </h5></div>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/centre',
        success: function(centres) {
            $.each(centres, function(i, centre) {
                $centres.append('<option value=' + centre.ID_Centre + '>' + centre.Nom_Centre + '</option>');
            });
        }
    });
});