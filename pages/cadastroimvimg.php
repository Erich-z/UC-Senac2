<?php
include('../db/conexao.php');
include ('../db/verificaSS.php');

$usuarioLogin = $_SESSION['id'];
$idanuncio = $_SESSION['idanuncio'];


$arquivosCount = count($_FILES['arquivo']['name']);

for($i=0;$i<$arquivosCount;$i++) {
    if(in_array($_FILES['arquivo']['type'][$i], array('image/jpeg','image/png','image/jpg'))) {
        //$nome = $_FILES['arquivo']["name"];
        $nome = md5(time().rand(0,1000)).'.jpg';
        move_uploaded_file($_FILES['arquivo']['tmp_name'][$i],'../img/'.$nome);

        $img_cadastra = "INSERT INTO anuncio_imagens values (null, $idanuncio, $usuarioLogin, './img/$nome')";
        $img_concluido = $conexao->prepare($img_cadastra);
        $img_concluido->execute();

        header("Location:index.php");
    }
}
