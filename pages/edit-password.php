<?php 
include ('../db/conexao.php');

$idu = addslashes($_GET['idu']);
$senhaUser = ($_GET['txtkey']);


$atualizarUsuario = ("UPDATE usuario SET usuarioSenha = '[$senhaUser]' where usuarioEmail = '$idu' ");
$usuarioAtualizado = $conexao->prepare($atualizarUsuario);
$usuarioAtualizado->execute();






  
?>