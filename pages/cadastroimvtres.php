<?php 

include('../db/conexao.php');
include ('../db/verificaSS.php');

$usuarioLogin = $_SESSION['id'];

$usuario_nome = $_GET['txtusu'];
$usuario_cpf = $_GET['txtCPF'];
$usuario_fone = $_GET['txtTelefone'];
$usuario_diaria = $_GET['txtDiaria'];
//
$usuario_CEP = $_GET['txtCEP'];
$usuario_Rua = $_GET['txtRua'];
$usuario_Bairro = $_GET['txtBairro'];
$usuario_Cidade = $_GET['txtCidade'];
$usuario_NroCasa = $_GET['txtNroCasa'];

echo $usuarioLogin;



/*$selectUsuario = ("SELECT * from usuario where usuarioID = $usuarioLogin");
$selectUsuario2 = $conexao->prepare($selectUsuario);
$selectUsuario2->execute();*/

//$linha = $selectUsuario2->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/cadastroimovtres.css">
   
</head>
<body>
    <main class="container login-page">
      <div class="borda">
       
        <div class="textimv">
          <img class="logo" src="../img/logo/MicrosoftTeams-image.png" alt="">
        </div>

        <form action="./cadastraimvinsert.php" method="get" class="needs-validation" novalidate>
        <input type="hidden" name="txtusu" <?php echo "value='$usuario_nome'"; ?>>
        <input type="hidden" name="txtCPF" <?php echo "value='$usuario_cpf'"; ?>>
        <input type="hidden" name="txtTelefone" <?php echo "value='$usuario_fone'"; ?>>
        <input type="hidden" name="txtDiaria" <?php echo "value='$usuario_diaria'"; ?>>
        <input type="hidden" name="txtCEP" <?php echo "value='$usuario_CEP'"; ?>>
        <input type="hidden" name="txtRua" <?php echo "value='$usuario_Rua'"; ?>>
        <input type="hidden" name="txtBairro" <?php echo "value='$usuario_Bairro'"; ?>>
        <input type="hidden" name="txtCidade" <?php echo "value='$usuario_Cidade'"; ?>>
        <input type="hidden" name="txtNroCasa" <?php echo "value='$usuario_NroCasa'"; ?>>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtQuarto" class="form-control rounded-pill" placeholder="Quantos quartos possui" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira quantos quarto possui</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtBanheiro" class="form-control rounded-pill" placeholder="Quantos banheiro possui" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira quantos banheiro possui</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtCozinha" class="form-control rounded-pill" placeholder="Quantas cozinha possui" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira quantidade de cozinha</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtDiferencial" class="form-control rounded-pill" placeholder="Possui algum diferencial" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira sua cidade</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  
                    <textarea class="form-control"  name="txtDescImovel" style="background-color: #d9d9d9; border: 1px solid black;" id="nameimv" rows="3" placeholder="Descrição do imovel"></textarea>
                    <div class="invalid-feedback ms-2">Por favor, insira número da residência</div>
            </div>
            
        </form>
        <button class="btnnext" type="submit"><i class="fas fa-chevron-right"></i></button>
      </div>
      <div class="tab d-lg-none d-flex">
        <i class="fas fa-search"></i>
        <i class="fas fa-heart"></i>
        <i class="fas fa-user"></i>
      </div>
    </main>
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
  ></script>
  <script src="../js/main.js"></script>
</body>
</html>