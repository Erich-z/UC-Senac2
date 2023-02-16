<?php
include('../db/conexao.php');
include ('../db/verificaSS.php');
$anuncioID = 0;
$usuarioLogin = $_SESSION['id'];
$sqlRequest = ("SELECT * FROM anuncios where ANusuarioID = $usuarioLogin");
$pesquisaAnuncios = $conexao->prepare($sqlRequest);
$pesquisaAnuncios->execute();

$infoPerfil = ("SELECT * from usuario where usuarioId = $usuarioLogin ");
$perfilselecionad = $conexao->prepare($infoPerfil);
$perfilselecionad->execute();

$perfilUsuario = $perfilselecionad->fetch(PDO::FETCH_OBJ);


//$sqlRequesImg = ("SELECT imoveis_img from anuncio_imagens WHERE Anuncios_anuncioID = $anuncioID");


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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/swiper.css" />
    
</head>

<body>

    <main class=" mt-5  user-profile container">

        <div class="d-flex align-items-center justify-content-center ">
            <img src="../img/65265871.jpg" alt="" class="rounded-circle img-fluid img-user" />
            <div class="ms-3">
                <p class="fw-bold mb-0"><?php echo $perfilUsuario->usuarioNome?></p>
                <p class="text-muted mb-0"><a href="./edit-profile.php"> Editar perfil</a></p>

                <i class="fas  fa-envelope"></i>
                <i class="fas ms-2 fa-sign-out-alt"  style="color: #5AC1FB;"></i>
            </div>
        </div>

        <div class="text-center">
            <h4 class="mb-2 p-3 ">Deseja anunciar seu imovel</br> totalmente de graça?</h4>
            <button type="button" class="btn btn-primary border-0" style="background-color: #5AC1FB; width: 18rem;">Anunciar
                imovel</button>
        </div>
       
        <div class="row gy-3 mt-2 home-page d-flex">
        <?php while ($linha = $pesquisaAnuncios->fetch(PDO::FETCH_OBJ)) { ?>
        <?php $anuncioID = $linha->anuncioID;
        $sqlRequesImg = ("SELECT imoveis_img from anuncio_imagens WHERE anuncioID = $anuncioID");
        $sqlResquestImg = $conexao->prepare($sqlRequesImg);
        $sqlResquestImg->execute();
        ?>
            <div class="card col-lg-3 col-12">
            <a href="./viewhouse.php?id=<?php echo $anuncioID; ?> " style="text-decoration: none !important; color: black; ">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php while ($linha2 = $sqlResquestImg->fetch(PDO::FETCH_OBJ)) { ?>
                        <div class="swiper-slide">
                            <div class="d-flex">

                            <img src=".<?php echo $linha2->imoveis_img; ?>" class="card-img-top" alt="..." />
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
                        <h5 class="card-title"><?php echo $linha->imoveisCidade; ?></h5>
                        <div><i class="fas fa-star"></i>4,5</div>
                    </div>
                    <div class="card-body  position-absolute bottom-20 end-0 mt-2">
                        
                        
                        <a href="#"></a> 
                        <button type="button" class="btn btn-primary btn-floating" ><i class="fa-solid fa-pen-to-square"></i></button>
                      
                        <button type="button" class="btn btn-primary btn-floating" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash"></i></button>
                     
                    <?php 
                    
                    ?>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja deletar esse anuncio?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                            
                    </div>
                    <p class="card-text text-secondary">
                    <?php echo $linha->imoveisBairro; ?>
                    </p>
                    <p class="card-text text-secondary">
                        <span class="text-dark"><strong>R$</strong></span> <?php echo $linha->imoveisDiaria; ?>/Noite
                    </p>

                </div>
                </a>
            </div>
          
       
        <?php
        }
        ?>
        </div>
        




    </main>

    <div class="tab">
        <i class="fas fa-search"></i>
        <i class="fas fa-heart"></i>
        <i class="fas fa-user"></i>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>

</body>


</html>