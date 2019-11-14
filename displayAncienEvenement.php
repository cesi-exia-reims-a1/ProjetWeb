<?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM evenement WHERE Date_Evenement < (Select Date( NOW()))");
$requete->execute();
?>

				<?php while($ligne=$requete->fetch()){ ?>
					<div class="card">
                        <a class="nolink" href="infoEvenement.php?id_evenement=<?php echo $ligne['ID_Evenement']?>">
    			        <img class="card-img-top" src=<?php echo $ligne['URL_PHoto']?> alt="photo1">
    			        <div class="card-body">
      			            <h5 class="card-title"><?php echo $ligne['Nom_Evenement']?></h5>
      			            <p class="card-text"><?php echo $ligne['Description_Evenement']?></p>
    			        </div>
		            </div>
				<?php
				} ?></a>

        