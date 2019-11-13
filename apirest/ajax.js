// Exécute un appel AJAX GET

$(function (){
    var $articles = $('#articles');
    var $evenement = $('#evenement');
    var $centres = $('#centre')

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/produit',
        success: function(articles) {
            $.each(articles, function(i, article) {
                $articles.append('<img src=' + article.Photo_Produit + '>');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/evenement',
        success: function(evenements) {
            $.each(evenements, function(i, evenement) {
                $evenement.append('<img src=' + evenement.URL_PHoto + ' class="d-block w-100" alt="PGW">');
            });
        }
    });

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/centre',
        success: function(centres) {
            $.each(centres, function(i, centre) {
                $centres.append('<option' + centre.Nom_Centre + '</option>');
            });
        }
    });
});