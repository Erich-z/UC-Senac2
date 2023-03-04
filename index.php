<?php
include('./db/conexao.php');
include('./db/verificaSS.php');

$search = "";
if (isset($_GET['search'])) {
  $search = "WHERE imoveisCidade LIKE '%" . $_GET['search'] . "%' OR imoveisBairro LIKE '%" . $_GET['search'] . "%' ";
}

$anuncioID = 0;
$imgID = 0;
$sqlRequest = ("SELECT * FROM anuncios $search");
$pesquisaAnuncios = $conexao->prepare($sqlRequest);
$pesquisaAnuncios->execute();





//$sqlRequesImg = ("SELECT imoveis_img from anuncio_imagens WHERE Anuncios_anuncioID = $anuncioID");

//$usuarioLogin = $_SESSION['id'];
//$usuarioSelect = ("SELECT * from usuario where $usuarioLogin");
//$usuarioReady = $conexao->prepare($usuarioSelect);
//$usuarioReady->execute();
//echo $usuarioLogin;
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/swiper.css" />
</head>

<body>
  <main class="container home-page">
    <h1 class="text-center"></h1>
    <div class=" d-flex m-0 p-0 justify-content-end mb-2">
      <a href="./pages/cadastroimv.php" class="btn btn-primary"> Seja um HOST!</a>
    </div>
    <div class="row gy-3">

      <form action="index.php" method="GET" class="col-10 col-md-11 d-flex align-items-center ">
        <div class="input-group">

          <input type="text" name="search" class="form-control search-input" aria-label="Dollar amount (with dot and two decimal places)" placeholder="O que  procura?" />
          <button type="submit" class="input-group-text search-input-left"><i class="fas fa-search"></i></button>
        </div>

      </form>

      <div class="col-2 col-md-1 d-flex justify-content-end">
        <?php
        if ($isLogged) {
        ?>
          <div class="dropdown d-flex ">
            <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
              $usuarioLogin = $_SESSION['id'];
              $infoUser = ("SELECT * from usuario where usuarioID = $usuarioLogin");
              $infoUsers = $conexao->prepare($infoUser);
              $infoUsers->execute();
              $linha_User = $infoUsers->fetch(PDO::FETCH_OBJ)
              ?>
              <img src="<?php echo $linha_User->usuario_foto ?>" class="rounded-circle" alt="" style="width: 45px; height: 45px">

            </a>
            <ul class="dropdown-menu user-profile-dropdown p-0">
              <li><a class="dropdown-item" href="./pages/user-profile.php">Meu Perfil</a></li>
              <li><a class="dropdown-item" href="./pages/edit-profile.php">Editar Perfil</a></li>

              <li><a class="dropdown-item bg-danger rounded-bottom text-white" href="./db/logout.php">Sair</a></li>
            </ul>
          </div>
        <?php
        } else { ?>
          <button class="btn btn-primary"><a href="./pages/login.php" style="color: white;">Login</a></button>

        <?php }
        ?>

      </div>

      <!--inicio listagem-->

      <?php while ($linha = $pesquisaAnuncios->fetch(PDO::FETCH_OBJ)) { ?>
        <?php $anuncioID = $linha->anuncioID;
        $sqlRequesImg = ("SELECT * from anuncio_imagens WHERE anuncioID = $anuncioID");
        $sqlResquestImg = $conexao->prepare($sqlRequesImg);
        $sqlResquestImg->execute();
        ?>

        <div class="card col-12 col-lg-3">
          <a href="./pages/viewhouse.php?id=<?php echo $anuncioID; ?> " style="text-decoration: none !important; color: black; ">
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <?php while ($linha2 = $sqlResquestImg->fetch(PDO::FETCH_OBJ)) { ?>
                  <?php $imgID = $linha2->imagemID ?>
                  <div class="swiper-slide">
                    <div class="d-flex">
                      <i class="fa-regular fa-heart"></i>


                      <input type="hidden" value="<?php echo $imgID ?>">
                      <img src="<?php echo $linha2->imoveis_img; ?>" class="card-img-top" alt="..." />

                    </div>

                  </div>
                <?php
                }
                ?>

              </div>

              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->

              <!-- If we need scrollbar -->
            </div>

            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title my-1"><?php echo $linha->imoveisCidade; ?></h5>
                <div><i class="fas fa-star"></i>4,5</div>
              </div>
              <p class="card-text text-secondary">
                <?php echo $linha->imoveisBairro; ?>
              </p>
              <p class="card-text text-secondary ">
                <span class="text-dark"><strong>R$</strong></span> <span class="money"> <?php echo $linha->imoveisDiaria; ?></span>/Noite
              </p>
            </div>
          </a>
        </div>


      <?php
      }
      ?>
  </main>
  <div class="tab d-lg-none d-flex">
    <i class="fas fa-search"></i>
    <i class="fas fa-heart"></i>
    <i class="fas fa-user"></i>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="./js/masker.js"></script>
  <script src="./js/swiper.js"></script>
  <script src="./js/main.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>