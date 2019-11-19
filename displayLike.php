<?php


if(!isset($_SESSION['id'])){

}else{
    $idPersonne = $_SESSION['id'];
    include('bdd.php');

    $requete2 = $bdd->prepare("SELECT * FROM like_photo WHERE ID_Photo = :id_photo AND ID_Personne = :id_personne");
    $requete2->bindValue(':id_photo', $idPhoto, PDO::PARAM_STR);
    $requete2->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
    $requete2->execute();
    if($requete2->rowCount() > 0){?>
        <div class="">   			
	        <a href="scriptDislike.php?id_photo=<?php echo $idPhoto?>"><img id="like" class="like" src="assets/image/coeurRouge.png" alt="like"></a> 
        </div><?php
    } else {?>
        <div class="">   			
	        <a href="scriptLike.php?id_photo=<?php echo $idPhoto?>"><img id="like" class="like" src="assets/image/coeurBlanc.png" alt="like"></a> 
        </div><?php
    }
}
?>