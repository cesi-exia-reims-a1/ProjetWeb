<?php  
session_start();
$id = $_POST['ID_Centre'];

$_SESSION['centre'] = $id;
header('Location: index.php');
exit();


?>