<?php

$idPhoto = $_GET['id_photo'];
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM personne JOIN photo ON personne.ID_Personne=photo.ID_Personne WHERE ID_Photo = :id_photo");
$requete->bindValue(':id_photo', $idPhoto, PDO::PARAM_STR);
$requete->execute();
   

while($ligne=$requete->fetch()){ ?>
<div class="container card" id="photoEvent">
			<?php if(isset($_SESSION['status']) && $_SESSION['status'] == 1){ ?>
			<form method="post" action="scriptsignalementphotos.php">
				<p class="signin button mt-1 mb-1 ml-3"> 
				<input type="hidden" value="<?php echo $idPhoto ?>" name="id_photo">
	        	<input type="submit" value="Signaler" name="Signale" id="submitButton"  />
	   		 	</p>
			</form>
			<?php  
			} ?>
    <div class="card mt-2">
        <img class="card-img-top" src=<?php echo $ligne['URL_Photo']?> alt="photo">
    </div>
    <div class="container m-2">
    	<div class="row">
    		<div class="col-8"><?php include("displayLike.php")?></div>
    		<div class="col-4">
    			<div> <p> Posté par : <?php echo $ligne['Prenom_Personne'],' ', $ligne['Nom_Personne']?></p> </div>
    		</div>
    	</div>
    	<div class="col-4"><?php include("displayNombreLike.php")?> Like(s)</div>
	</div>
</div>
<?php
    } ?>