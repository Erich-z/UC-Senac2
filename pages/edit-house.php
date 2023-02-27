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
}

?>