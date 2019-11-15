<?php
$today = date("Y-m-d");
if($dateEvent>$today){
    echo "<form action='scriptinscriptionevenement.php?id_evenement="?><?php echo $ligne['ID_Evenement']?><?php echo"'
    method='post'>
    <div class='col' id='evenement'>
        <div class='m-5'>
            <input class='p-3' type='submit' value='S inscrire à cet événement !' />
        </div>
    </div>";
}