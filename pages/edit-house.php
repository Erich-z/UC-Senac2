<?php
include('../db/conexao.php');
include ('../db/verificaSS.php');
$usuarioLogin = $_SESSION['id'];  
$anuncioID = $_SESSION['id'];


$conexao->beginTransaction();
     
$imoveisCep = addslashes($_POST['cepimv']);
$imoveisRua = addslashes($_POST['ruaimv']);
$imoveisBairro = addslashes($_POST['bairroimv']);
$imoveisCidade = addslashes($_POST['cidadeimv']);
$imoveisNumero = addslashes($_POST['numeroimov']);
$imoveisDescricao = addslashes($_POST['descimov']);
$imoveisQuarto = addslashes($_POST['quartoimov']);
$imoveisBanheiro = addslashes($_POST['banheiroimov']);
$imoveisCozinha = addslashes($_POST['cozinhaimov']);
$imoveisDiferencial	 = addslashes($_POST['difimov']);
$imoveisDiaria = addslashes($_POST['precoimov']);

$editHouseUp = $conexao->prepare("UPDATE anuncios SET imoveisDiaria = :imoveisDiaria,
                                  imoveisDescricao = :imoveisDescricao, imoveisCep = :imoveisCep,
                                  imoveisRua = :imoveisRua, imoveisBairro = :imoveisBairro,
                                  imoveisCidade = :imoveisCidade, imoveisNumero = :imoveisNumero,
                                  imoveisQuarto = :imoveisQuarto, imoveisBanheiro = :imoveisBanheiro,
                                  imoveisCozinha = :imoveisCozinha,
                                  imoveisDiferencial = :imoveisDiferencial WHERE anuncioID = :usuarioLogin");


$parametrosU =
[
    'imoveisDiaria' => $imoveisDiaria,
    'imoveisDescricao' => $imoveisDescricao,
    'imoveisCep' => $imoveisCep,
    'imoveisRua' => $imoveisRua,
    'imoveisBairro' => $imoveisBairro,
    'imoveisCidade' => $imoveisCidade,
    'imoveisNumero' => $imoveisNumero,
    'imoveisQuarto' => $imoveisQuarto,
    'imoveisBanheiro' => $imoveisBanheiro,
    'imoveisCozinha' => $imoveisCozinha,
    'imoveisDiferencial' => $imoveisDiferencial,
    'usuarioLogin' => $usuarioLogin,
];

$editHouseUp->execute($parametrosU);

$arquivosCount = count($_FILES['arquivo']['name']);

for($i=0;$i<$arquivosCount;$i++) {
    if(in_array($_FILES['arquivo']['type'][$i], array('image/jpeg','image/png','image/jpg'))) {
        //$nome = $_FILES['arquivo']["name"];
        $nome = md5(time().rand(0,1000)).'.jpg';
        move_uploaded_file($_FILES['arquivo']['tmp_name'][$i],'../img/'.$nome);

        $img_cadastra = "UPDATE anuncio_imagens SET anuncioID = '$anuncioID', usuarioID = '$usuarioLogin', imoveis_img = './img/$nome' WHERE anuncioID = '$usuarioLogin'";
        $img_concluido = $conexao->prepare($img_cadastra);
        $img_concluido->execute();
    }
} 

$conexao->commit();
 header("Location:./user-profile.php");
?>