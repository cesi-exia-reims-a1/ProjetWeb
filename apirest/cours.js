var articleElt = document.getElementById("article");
ajaxGet("http://localhost:3000/produit", function (reponse) {
    // Transforme la réponse en un tableau d'articles
    var article = JSON.parse(reponse);
    article.forEach(function (article) {
        var logoElt = document.createElement("img");
        logoElt.src = article.Photo_Produit;
        articleElt.appendChild(logoElt);
    });
});