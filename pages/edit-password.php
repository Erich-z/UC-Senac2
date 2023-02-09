<?php 
include ('../db/conexao.php');
include ('../db/verificaSS.php');

$idu = $_SESSION[ 'id' ];
$senhaUser = ($_GET['txtkey']);


$atualizarUsuario = ("UPDATE usuario SET usuarioSenha = '$senhaUser' where usuarioId = '$idu' ");
$usuarioAtualizado = $conexao->prepare($atualizarUsuario);
$usuarioAtualizado->execute();

header('Location: edit-profile.php');





  
?>