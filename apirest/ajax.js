// Exécute un appel AJAX GET

$(function (){
    var $articles = $('#articles');

    $.ajax({
        type: 'GET' ,
        url: 'http://localhost:3000/produit',
        success: function(articles) {
            $.each(articles, function(i, article) {
                $articles.append('<img src=' + article.Photo_Produit + '>');
            });
        }
    });
});