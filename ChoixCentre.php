<!DOCTYPE html>
<html>
<head>
	<title>BDE-Site officiel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="description" content="Site du BDE, ici vous pourrez acheté des produits en fonction de votre centre, participer à des évenements, poster, liker et commenter des photos" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

</head>
<body>
    <div class="container-fluid mt-2">
        <div class="featured-img"> 
            <img src="assets/image/cesi.png" class="d-block w-100" alt="page d'acceil">
        </div>
    </div>
        <div id="register" class="container" style="margin-top:3em;">
            <form action="scriptChoixCentre.php" method="post">
                <select name="ID_Centre" id="centre" class="form-control">
                    <option selected=""> -- Choisir votre centre --</option>
                    <?php include('displayCentre.php')?>
                </select>
                <p class="signin button"> 
                    <input type="submit" value="Valider" id="submitButton"  />
                </p>
            </form>
        </div>    
    
</body>