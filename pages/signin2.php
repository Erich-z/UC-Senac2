<?php 
include ('../db/conexao.php');

$usuCad = addslashes ($_GET['txtName']);
$emailCad = addslashes ($_GET['txtEmail']);
$senhaCad = addslashes( $_GET['txtSenha']);

$cadastraUsuario = "INSERT INTO usuario VALUES ( null, '$usuCad', '$emailCad', '$senhaCad', null, null, null, 0)";
$cadastrou = $conexao->prepare($cadastraUsuario);
$cadastrou->execute();
    




  
?>