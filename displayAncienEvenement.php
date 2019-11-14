<?php

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM evenement WHERE Date_Evenement < (Select Date( NOW()))");
$requete->execute();
?>

		<div class="container-fluid">
			<div class="row justify-items-center">
				<?php while($ligne=$requete->fetch()){ ?>
					<div id="caseEvent" class="col border border-secondary text-center m-5">
						<a class="nolink" href="infoEvenement.php?id_evenement=<?php echo $ligne['ID_Evenement']?>">
						<img src=<?php echo $ligne['URL_PHoto']?>>
						<h2> <?php echo $ligne['Nom_Evenement']?> </h2>
						</a>
					</div>
				<?php
				} ?>
			</div>
		</div>