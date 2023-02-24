<?php 

include('../db/conexao.php');
include ('../db/verificaSS.php');

$usuarioLogin = $_SESSION['id'];

$usuario_nome = preg_replace('/[^0-9]/', '',$_GET['txtusu']);
$usuario_cpf = preg_replace('/[^0-9]/', '',$_GET['txtCPF']); 
$usuario_fone = preg_replace('/[^0-9]/', '',$_GET['txtTelefone']); 
$usuario_diaria = preg_replace('/[^0-9]/', '', $_GET['txtDiaria']);


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
    <link rel="stylesheet" href="../css/cadastroimovdois.css">
   
</head>
<body>
    <main class="container login-page">
      <div class="borda">
       
        <div class="textimv">
          <img class="logo" src="../img/logo/MicrosoftTeams-image.png" alt="">
        </div>

        <form action="./cadastroimvtres.php" method="get" class="needs-validation" novalidate>
        <input type="hidden" name="txtusu" <?php echo "value='$usuario_nome'"; ?>>
        <input type="hidden" name="txtCPF" <?php echo "value='$usuario_cpf'"; ?>>
        <input type="hidden" name="txtTelefone" <?php echo "value='$usuario_fone'"; ?>>
        <input type="hidden" name="txtDiaria" <?php echo "value='$usuario_diaria'"; ?>>

            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtCEP" class="form-control rounded-pill" placeholder="Informe seu CEP" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira seu CEP</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtRua" class="form-control rounded-pill" placeholder="Informe sua rua" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira sua rua</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtBairro" class="form-control rounded-pill" placeholder="Informe seu bairro" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira seu bairro</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtCidade" class="form-control rounded-pill" placeholder="Informe sua cidade" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira sua cidade</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtNroCasa" class="form-control rounded-pill" placeholder="Informe número da residência" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira número da residência</div>
            </div>
            
        </form>
        <button class="btnnext" type="submit"><i class="fas fa-chevron-right"><a href="./cadastroimvtres.php"></a></i></button>
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
  <script src="../js/viacep.js"></script>
</body>
</html>