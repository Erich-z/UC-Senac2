<?php 
include ('../db/conexao.php');
include ('../db/verificaSS.php');

$idu = $_SESSION[ 'id' ];
$emailUser = ($_GET['txtemail']);


$atualizarUsuario = ("UPDATE usuario SET usuarioEmail = '$emailUser' where usuarioId = '$idu' ");
$usuarioAtualizado = $conexao->prepare($atualizarUsuario);
$usuarioAtualizado->execute();

header('Location: edit-profile.php');





  
?>