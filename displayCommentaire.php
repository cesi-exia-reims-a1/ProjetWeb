<?php
$id_Photo =$_GET['id_photo'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM commentaire WHERE id_Photo= :id_Photo");
$requete->bindValue(':id_Photo', $id_Photo, PDO::PARAM_STR);
$requete->execute();  

$requete2 = $bdd->prepare("SELECT * FROM commentaire JOIN personne ON commentaire.ID_Personne = personne.ID_Personne WHERE id_Photo= :id_Photo");
$requete2->bindValue(':id_Photo', $id_Photo, PDO::PARAM_STR);
$requete2->execute();
$ligne2=$requete2->fetch();

while($ligne=$requete->fetch()){ ?>
    <div class="card mb-2">
        <div class="container card p-4">
        	<div class="row">
        		<div class="col-11">
        			<p><?php echo $ligne['Texte']?></p>
        		</div>
        		<div class="col-1">
        			<?php if(isset($_SESSION['status']) && $_SESSION['status'] == 1){ ?>
					<form method="post" action="scriptSignalementCommentaire.php">
						<p class="signin button mt-1 mb-1 ml-3"> 
						<input type="hidden" value="<?php echo $ligne['ID_Commentaire'] ?>" name="id_com">
			        	<input type="submit" value="Signaler" name="Signaler" id="submitButton"  />
			   		 	</p>
					</form>
					<?php  
					} ?>  
        		</div>
        	</div>  
        </div>
    <p id="commentaire"><?php echo 'Posté par ',$ligne2['Prenom_Personne'],' ',$ligne2['Nom_Personne']?> 
    </div>
<?php
} 
$requete->closeCursor(); 
?>
