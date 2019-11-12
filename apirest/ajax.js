// Exécute un appel AJAX GET

var $articles = $ ('#articles');

$.ajax({
    type: 'GET' ,
    url: 'http://localhost:3000/produit',
    success: function(produits) {
        $.each(produits, function(i, produit) {
            $produits.append('<img src="produit.Photo_produit">')
        })
    }
})