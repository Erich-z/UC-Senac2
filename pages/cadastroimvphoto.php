<?php 
include('../db/conexao.php');
include ('../db/verificaSS.php');
$usuarioLogin = $_SESSION['id'];

$idanuncio = $_SESSION['idanuncio'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="../css//cadastroimvphoto.css">
   
</head>
<body>
    <main class="container login-page">
      <div class="borda">
       
        <div class="textimv">
          <img class="logo" src="../img/logo/MicrosoftTeams-image.png" alt="">
        </div>
        <form enctype="multipart/form-data" action="cadastroimvimg.php" method="get">
          <div class="container d-flex justify-content-center aviso" style="margin-bottom: 2rem;"><h5 class="titulo">Selecionar todas imagens juntas.</h5></div>
            <input type="file" id="file-input" accept="image/png, image/jpeg" onchange="preview()" multiple>
            <label for="file-input">
                <i class="fas fa-upload"></i> &nbsp; Adicionar foto
            </label>
            <p id="num-of-files">Nenhuma foto</p>
            <div id="images"></div>
            
            <button type="submit" class="btn btn-primary btn-lg  btn">Anunciar</button>
            </form>
      </div>
      <div class="tab d-lg-none d-flex">
        <i class="fas fa-search"></i>
        <i class="fas fa-heart"></i>
        <i class="fas fa-user"></i>
      </div>
    </main>
     <script src="../js/cadastroimvphoto.js"></script>
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
  ></script>
 
  <script src="../js/main.js"></script>
</body>
</html>