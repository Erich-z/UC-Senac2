<?php
include('../db/conexao.php');
include ('../db/verificaSS.php');
$idusuario = $_SESSION[ 'id' ];  

$conexao->beginTransaction();


if(isset($_POST["btCad"]))
{  
    
$imoveisCep = addslashes($_POST['cepimv']);
$imoveisRua = addslashes($_POST['ruaimv']);
$imoveisBairro = addslashes($_POST['bairroimv']);
$imoveisCidade = addslashes($_POST['cidadeimov']);
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
                                  imoveisDiferencial = :imoveisDiferencial WHERE anuncioID = :idusuario");
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
    'idusuario' => $idusuario,
];
try
{
    $comandoU->execute($parametrosU);
    
}



}

?>