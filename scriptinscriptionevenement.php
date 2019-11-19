 <?php session_start();

$idPersonne = $_SESSION['id'];
$idEvent = $_GET['id_evenement'];


include('bdd.php');

$requete = $bdd->prepare("INSERT INTO participer VALUES (:id_evenement, :id_personne)");
$requete->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete->bindValue(':id_evenement', $idEvent, PDO::PARAM_STR);

$requete->execute();  
header('Location: evenement.php');
exit();

?>