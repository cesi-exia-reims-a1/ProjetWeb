<?php


if(!isset($_SESSION['id'])){

}else{
    $idPersonne = $_SESSION['id'];
    $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

    $requete2 = $bdd->prepare("SELECT * FROM like_photo WHERE ID_Photo = :id_photo AND ID_Personne = :id_personne");
    $requete2->bindValue(':id_photo', $idPhoto, PDO::PARAM_STR);
    $requete2->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
    $requete2->execute();
    if($requete2->rowCount() > 0){?>
        <div class="col-9">   			
	        <a href="scriptDislike.php?id_photo=<?php echo $idPhoto?>"><img class="like" src="assets/image/coeurRouge.png" alt="like"></a> 
        </div><?php
    } else {?>
        <div class="col-9">   			
	        <a href="scriptLike.php?id_photo=<?php echo $idPhoto?>"><img class="like" src="assets/image/coeurBlanc.png" alt="like"></a> 
        </div><?php
    }
}
?>