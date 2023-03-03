<?php
include('../db/conexao.php');
include ('../db/verificaSS.php');
$usuarioLogin = $_SESSION['id'];



$conexao->beginTransaction();
$ok = true;
$anuncioSelecionado = addslashes($_POST['idimovelatt']);    
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
$imageids = ($_POST['imageid']);
print_r($imageids);

$editHouseUp = $conexao->prepare("UPDATE anuncios SET imoveisDiaria = :imoveisDiaria,
                                  imoveisDescricao = :imoveisDescricao, imoveisCep = :imoveisCep,
                                  imoveisRua = :imoveisRua, imoveisBairro = :imoveisBairro,
                                  imoveisCidade = :imoveisCidade, imoveisNumero = :imoveisNumero,
                                  imoveisQuarto = :imoveisQuarto, imoveisBanheiro = :imoveisBanheiro,
                                  imoveisCozinha = :imoveisCozinha,
                                  imoveisDiferencial = :imoveisDiferencial WHERE anuncioID = :anuncioID");

?> 
<script> console.log(<?php $anuncioSelecionado ?>); </script>
<?php
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
    'anuncioID' => $anuncioSelecionado,
];
try
{
    $editHouseUp->execute($parametrosU);    
}
catch (PDOException $erroU)
{
    $ok = false;   
}


$arquivosCount = count($_FILES['arquivo']['name']);

for($i=0;$i<$arquivosCount;$i++) {
    if(in_array($_FILES['arquivo']['type'][$i], array('image/jpeg','image/png','image/jpg'))) {
        //$nome = $_FILES['arquivo']["name"];
        $nome = md5(time().rand(0,1000)).'.jpg';
        move_uploaded_file($_FILES['arquivo']['tmp_name'][$i],'../img/'.$nome);
        
        $img_cadastra = "UPDATE anuncio_imagens SET  imoveis_img = './img/$nome' WHERE anuncioID = '$anuncioSelecionado' AND imagemID = $imageids[$i] AND usuarioID = $usuarioLogin";
        /* echo $img_cadastra;
         */
        try
        {
            $img_concluido = $conexao->prepare($img_cadastra);
            $img_concluido->execute();   
        }
        catch(PDOException $erroU)
        {
            $ok = false;
        }

    }
} 

if($ok)
{
    $conexao->commit();
}
else
{
    $conexao->rollBack();
}
 header("Location:./edithouse.php?id=$anuncioSelecionado");
?>