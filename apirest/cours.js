var articleElt = document.getElementById("article");
ajaxGet("http://localhost:3000/produit", function (reponse) {
    // Transforme la réponse en un tableau d'articles
    let container = $("#articles");
    let article = JSON.parse(reponse);
    console.log(container,article);
    let nbArticleParRow = 5;
    let row = $("<div class=\"row\"></div>");
    container.append(row);

    article = [{name:'test1'},{name:'coucou'},{name:'test2'},{name:'HEY'},{name:'xesvs'},{name:'btwdrbw'}];

    article.forEach(function (a,index) {
        
        if(index % nbArticleParRow == 0 && index !== 0){
            row = $("<div class=\"row\"></div>");
            container.append(row);
            console.log('NEW ROW',index);
        }
        let article = $("<div class=\"col\"></div>");
        row.append(article);

        article.append("a toi de jouer : "+a.name);
        /*
        var logoElt = document.createElement("img");
        logoElt.src = a.Photo_Produit;
        articleElt.appendChild(logoElt);
        var nomElt = document.createElement("h1");
        nomElt.textContent = article.Nom_Produit;
        articleElt.appendChild(nomElt);
        */
    });
});