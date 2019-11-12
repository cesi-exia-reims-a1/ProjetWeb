var articleElt = document.getElementById("article");
ajaxGet("http://localhost:3000/evenement", function (reponse) {
    // Transforme la réponse en un tableau d'articles
    var article = JSON.parse(reponse);
    article.forEach(function (evenement) {
        var logoElt = document.createElement("img");
        logoElt.src = article.URL_PHoto;
        articleElt.appendChild(logoElt);
    });
});