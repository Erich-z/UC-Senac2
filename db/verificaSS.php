<?php
if(!isset($_SESSION)){
    session_start();
}

if(empty($_SESSION['ativo'])){
    
    $isLogged = false;
}
else
{
    //$usuarioLogin = json_encode($_SESSION[ 'login' ]);
    $isLogged = true;
    $usuarioLogin = $_SESSION['login'];
    
}
?>