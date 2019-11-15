<?php
$id_Photo =$_GET['id_photo'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM commentaire WHERE id_Photo= :id_Photo");
$requete->bindValue(':id_Photo', $id_Photo, PDO::PARAM_STR);
$requete->execute();  
    
while($ligne=$requete->fetch()){ ?>
    <center><div class="card">
        <div class="card mb-3">
            <p><?php echo $ligne['Texte']?></p>
            <div class="container">
		    	<button class="button button-like">
			  		<i class="fa fa-heart"></i>
			  		<span>Like</span>
				</button>
			</div>
        </div>
    </div></center>
<?php
} 
$requete->closeCursor(); 
?>
