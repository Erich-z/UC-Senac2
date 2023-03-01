<?php

include('../db/conexao.php');
include ('../db/verificaSS.php');
$id_user = $_SESSION[ 'id' ];

// print_r($_FILES);
 if(in_array($_FILES['image']['type'], array('image/jpeg','image/png','image/jpg'))) {
    //$nome = $_FILES['arquivo']["name"];
    $nome = md5(time().rand(0,1000)).'.jpg';

    $update_photo = ("UPDATE usuario SET usuario_foto = './img/$nome' where usuarioID = '$id_user'");
    echo  $update_photo;
    $execute_update = $conexao->prepare($update_photo);
    $execute_update->execute();
    
    move_uploaded_file($_FILES['image']["tmp_name"],'../img/'.$nome);
} else {
    echo 'Arquivo nao permitido!';
}



?>