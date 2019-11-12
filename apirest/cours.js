var articleElt = document.getElementById("article");
ajaxGet("http://localhost:3000/produit", function (reponse) {
    // Transforme la réponse en un tableau d'articles
    var article = JSON.parse(reponse);
    article.forEach(function (article) {
        // Ajout du titre et du contenu de chaque article
        var titreElt = document.createElement("h2");
        titreElt.textContent = article.Nom_Produit;
        var contenuElt = document.createElement("p");
        contenuElt.textContent = article.Descriptif_Produit;
        var logoElt = document.createElement("img");
        logoElt.src = article.Photo_Produit;
        articleElt.appendChild(titreElt);
        articleElt.appendChild(contenuElt);
        articleElt.appendChild(logoElt);
    });
});