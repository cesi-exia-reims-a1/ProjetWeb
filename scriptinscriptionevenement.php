 <?php session_start();

$idPersonne = $_SESSION['id'];
$idEvent = $_GET['id_evenement'];


$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("INSERT INTO participer VALUES (:id_evenement, :id_personne)");
$requete->bindValue(':id_personne', $idPersonne, PDO::PARAM_STR);
$requete->bindValue(':id_evenement', $idEvent, PDO::PARAM_STR);

$requete->execute();  
header('Location : boutique.php');
exit();

?>