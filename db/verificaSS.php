<?php
if(!isset($_SESSION)){
    session_start();
}

if(empty($_SESSION['ativo'])){
    header("Location:index.php");
    
}
else
{
    //$usuarioLogin = json_encode($_SESSION[ 'login' ]);
    $usuarioLogin = $_SESSION['login'];
    
}
?>