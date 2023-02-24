<?php 
include ('../db/conexao.php');
include ('../db/verificaSS.php');
include ('../db/isLogged.php');

$anuncioID = addslashes ($_GET['anuncioID']);
$anuncianteID = addslashes ($_GET['anuncianteID']);
$locadorID = addslashes( $_GET['locadorID']);
$diaID = addslashes( $_GET['diaID']);
$horaID = addslashes( $_GET['horaID']);
$notaCasa = addslashes( $_GET['notaCasa']);
$comentarioCasa = addslashes( $_GET['comentarioCasa']);


$comentarioCadastra = "INSERT INTO anuncio_comentarios VALUES ( null, '$anuncioID', '$anuncianteID', '$locadorID',
         '$comentarioCasa', '$notaCasa', '$diaID', '$horaID')";
$cadastrou = $conexao->prepare($comentarioCadastra);
$cadastrou->execute();

header("Location: index.php");




  
?>