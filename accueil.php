<!DOCTYPE html>
<html>
<head>
	<title>BDE-Site officiel</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href ="assets/css/style.css">
	
</head>
<body>
    <div class="container">
        <h1>Site du BDE CESI</h1>
        <div class="featured-img"> 
            <img src="assets/image/cesi.png" class="d-block w-100" alt="page d'acceil">
        </div>
        <div id="register" style="margin-top:3em;">
            <select name="ID_Centre" id="centre" class="form-control">
                <option selected=""> -- Choisir votre centre --</option>
                <?php include('displayCentre.php')?>
            </select>
        </div>    
    </div>
</body>