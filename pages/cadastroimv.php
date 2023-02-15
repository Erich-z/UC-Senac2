<?php 
include('../db/conexao.php');
include ('../db/verificaSS.php');

$usuarioLogin = $_SESSION['id'];

$selectUsuario = ("SELECT * from usuario where usuarioID = $usuarioLogin");
$selectUsuario2 = $conexao->prepare($selectUsuario);
$selectUsuario2->execute();

$linha = $selectUsuario2->fetch(PDO::FETCH_OBJ);
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
    <link rel="stylesheet" href="../css/cadastro-imovel.css">
   
</head>
<body>
    <main class="container login-page">
      <div class="borda">
       
        <div class="textimv">
          <img class="logo" src="../img/logo/MicrosoftTeams-image.png" alt="">
            <h1 class="bv">Olá, <span style="color: #00A3FF;">Bem-vindo</span></h1>
            <p>para <span style="color: #0057FF;">cadastrar</span> seu imovel preencha o formulario.</p>
        </div>

        <form action="./cadastroimvdois.php" method="get" class="needs-validation" novalidate>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtusu" class="form-control rounded-pill check-null" value="<?php echo $linha->usuarioNome?>" placeholder="Informe seu nome" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira seu nome</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtCPF" class="form-control rounded-pill check-null" value="<?php echo $linha->usuarioCPF?>" placeholder="Informe seu CPF" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira seu CPF</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv"  name="txtTelefone" class="form-control rounded-pill check-null" value="<?php echo $linha->usuarioTelefone?>" placeholder="Informe seu Telefone" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira seu telefone</div>
            </div>
            <div class="login d-grid gap-3">
                <div class="form-outline">
                  <input  type="text" id="nameimv" name="txtDiaria" class="form-control rounded-pill" placeholder="Informe seu preço pela diaria" required/>
                    <div class="invalid-feedback ms-2">Por favor, insira seu preço diaria</div>
            </div>
            
        </form>
        <button class="btnnext" type="submit"><i class="fas fa-chevron-right"><a href="./cadastroimvdois.php"></a></i></button>
      </div>
      <div class="tab d-lg-none d-flex">
        <i class="fas fa-search"></i>
        <i class="fas fa-heart"></i>
        <i class="fas fa-user"></i>
      </div>
    </main>
    
    <script type="text/javascript" src="https://unpkg.com/vanilla-masker@1.1.1/build/vanilla-masker.min.js  "></script>
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
  ></script>
  <script src="../js/viacep.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>