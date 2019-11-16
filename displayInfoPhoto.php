<?php

$idPhoto = $_GET['id_photo'];
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT URL_Photo FROM photo WHERE ID_Photo = :id_photo");
$requete->bindValue(':id_photo', $idPhoto, PDO::PARAM_STR);
$requete->execute();

$requete2 = $bdd->prepare("SELECT Nom_Personne, Prenom_Personne FROM personne JOIN photo ON personne.ID_Personne=photo.ID_Personne WHERE id_Personne=:id_Personne");
//$requete2->execute();
   

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
		<button class="button button-like">
			<i class="fa fa-heart"></i>
			<span>Like</span>
		</button>
		<div> <p> Posté par : <?//php echo $ligne['URL_Photo']?></p> </div>
	</div>
</div>
<?php
    } ?>