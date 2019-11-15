<?php
$id_Photo =$_GET['id_photo'];

$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM commentaire WHERE id_Photo= :id_Photo");
$requete->bindValue(':id_Photo', $id_Photo, PDO::PARAM_STR);
$requete->execute();  
    
while($ligne=$requete->fetch()){ ?>
    <div class="card mb-2">
        <div class="container card">
            <p><?php echo $ligne['Texte']?></p>           
        </div>
    </div>
<?php
} 
$requete->closeCursor(); 
?>
