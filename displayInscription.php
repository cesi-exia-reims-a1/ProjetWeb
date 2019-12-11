<?php
$today = date("Y-m-d");
$idPers = (isset($_SESSION['id'])) ? ($_SESSION['id']) : NULL;
$idEvent = $_GET['id_evenement'];
include('bdd.php');
$requete = $bdd->prepare("SELECT * FROM participer WHERE ID_Evenement = :id_evenement AND ID_Personne = :id_personne");
$requete->bindValue(':id_evenement', $idEvent, PDO::PARAM_STR);
$requete->bindValue(':id_personne', $idPers, PDO::PARAM_STR);
 
if($dateEvent>$today && isset($_SESSION['pseudo'])){
    $requete->execute(); 
    if($requete->rowCount() > 0){?>
        <input type="button" disabled="disabled" value="Vous êtes inscrits à cet évènement" class="m-5"/>
    <?php }
    else{?>
        <form action='scriptinscriptionevenement.php?id_evenement=<?php echo $ligne['ID_Evenement']?>' method='post'>
            <div class='col' id='evenement'>
            <div class='m-5'>
            <input class='p-3' type='submit' value='S inscrire à cet événement !' />
            </div>
            </div>
        </form>
    <?php
    }
} 
?>