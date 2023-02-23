<?php
    if(empty($_SESSION['ativo']))
    {
        $isLogged = false;
        //echo $_SESSION['ativo'];
        
    } else {    
        $isLogged = $_SESSION['ativo'];
        //echo $_SESSION['ativo'];
    }
?>