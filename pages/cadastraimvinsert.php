<?php 

include('../db/conexao.php');
include ('../db/verificaSS.php');

$usuarioLogin = $_SESSION['id'];



$usuario_nome = $_GET['txtusu'];
$usuario_cpf = $_GET['txtCPF'];
$usuario_fone = $_GET['txtTelefone'];
$usuario_diaria = $_GET['txtDiaria'];
//
$usuario_atualiza = "UPDATE usuario SET usuarioCPF = $usuario_cpf, usuarioTelefone = $usuario_fone WHERE usuarioID = $usuarioLogin";
$usuario_atualizou = $conexao->prepare($usuario_atualiza);
$usuario_atualizou->execute();



$usuario_CEP = $_GET['txtCEP'];
$usuario_Rua = $_GET['txtRua'];
$usuario_Bairro = $_GET['txtBairro'];
$usuario_Cidade = $_GET['txtCidade'];
$usuario_NroCasa = $_GET['txtNroCasa'];
//
$usuario_Quarto = $_GET['txtQuarto'];
$usuario_Banheiro = $_GET['txtBanheiro'];
$usuario_Cozinha = $_GET['txtCozinha'];
$usuario_Diferencial = $_GET['txtDiferencial'];
$usuario_DescImovel = $_GET['txtDescImovel'];


$cadastrar_Casa = "INSERT INTO anuncios VALUES (null, $usuarioLogin, $usuario_diaria, '$usuario_DescImovel', $usuario_CEP, '$usuario_Rua', '$usuario_Bairro', 
'$usuario_Cidade', $usuario_NroCasa, $usuario_Quarto, $usuario_Banheiro, $usuario_Cozinha, '$usuario_Diferencial', 0, 0 )";
$casaOpen = $conexao->prepare($cadastrar_Casa);
$casaOpen->execute();
$_SESSION['idanuncio'] = $conexao->lastInsertId();

echo $_SESSION['idanuncio'];

header("Location:cadastroimvphoto.php");
/*$selectUsuario = ("SELECT * from usuario where usuarioID = $usuarioLogin");
$selectUsuario2 = $conexao->prepare($selectUsuario);
$selectUsuario2->execute();*/

//$linha = $selectUsuario2->fetch(PDO::FETCH_OBJ);
?>