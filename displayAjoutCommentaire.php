<?php 
if(!isset($_SESSION['id'])){

} else {?>
<form method="POST" action="scriptCommentaire.php">
	<textarea class="container-fluid mt-4" name="commentaire" placeholder="Entrer votre commentaire"></textarea><br />
	<input type="hidden" value="<?php echo $idPhoto ?>" name="id">
	<input class="p-2" type="submit" value="Poster mon commentaire">
</form>
<?php
}
?>