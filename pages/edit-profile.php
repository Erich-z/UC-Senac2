<?php
include('../db/conexao.php');
include ('../db/verificaSS.php');
$idu = $_SESSION[ 'id' ];

$infoPerfil = ("SELECT * from usuario where usuarioId = $idu ");
$perfilselecionad = $conexao->prepare($infoPerfil);
$perfilselecionad->execute();

$perfilUsuario = $perfilselecionad->fetch(PDO::FETCH_OBJ);







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
    <main class=" mt-5 container">
        <div class="d-flex align-items-center justify-content-center">
            <img src=".<?php echo $perfilUsuario->usuario_foto?>" alt="" class="rounded-circle img-fluid img-user opacity-75" />
            <label for="file-upload-photo-profile" class="file-upload-photo-profile">
                <i class="fa fa-plus imgAdd">

                </i>
            </label>
            <input type="file" id="file-upload-photo-profile" class="d-none">


            <div class="ms-3">
                <p class="fw-bold mb-0"><?php echo $perfilUsuario->usuarioNome?></p>
            </div>
        </div>
        <div class="mt-4 gap-3 d-flex flex-column align-items-center ">
            <!-- Button trigger modal -->
            <button id="button" type="button" class="btn btn-primary border-0" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"
                style="background-color: #5AC1FB; width: 18rem; text-align: left">Alterar senha</button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Alterar senha</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="./edit-password.php" method="get" class="needs-validation" novalidate>
                                <div class="login d-grid gap-2 change-password">
                                    <div class="form-outline">
                                        <input type="password" id="formPassword" class="form-control rounded-pill "
                                            placeholder="senha" name="txtkey" required />
                                        <div class="invalid-feedback ms-2 mt-2">Por favor, insira sua senha</div>
                                        <i class="fas eye-icon fa-eye-slash"></i>
                                    </div>
                                    <div class="form-outline">
                                        <input type="password" id="formPassword" class="form-control rounded-pill "
                                            placeholder="confirme sua senha" required />
                                        <div class="invalid-feedback ms-2 mt-2">Por favor, confirme sua senha</div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 buttons-login pt-2">
                                    <button type="submit"  class="btn btn-primary enter-button  mt-3">
                                        Salvar senha
                                    </button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <button id="button" type="button" class="btn btn-primary border-0" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop2"
                style="background-color: #5AC1FB; width: 18rem; text-align: left;">Alterar
                email</button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title " id="staticBackdropLabe2">Alterar email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form action="edit-email.php" method="get" class="needs-validation" novalidate>
                                <div class="login d-grid gap-2">
                                    <div class="form-outline">
                                        <input type="text" id="formEmail" class="form-control rounded-pill"
                                            placeholder="Novo email" name="txtemail" required />
                                        <div class="invalid-feedback ms-2 mt-2">Por favor, insira seu email</div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 buttons-login pt-2">
                                    <button type="submit" class="btn btn-primary enter-button  mt-3">
                                        Salvar email
                                    </button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>







        </div>

        <!-- <div class="text-center" style=" position: relative; bottom: -15rem;  ">
            <button onclick="window.history.back()" type="button" class="btn btn-primary border-0"
                style="background-color: #007cc4; width: 10rem; ">Salvar e sair</button>
        </div> -->

    </main>





    <div class="tab">
        <i class="fas fa-search"></i>
        <i class="fas fa-heart"></i>
        <a href="../index.php"> <i class="fas fa-user"></i></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>

    <script src="../js/main.js"></script>
    <script src="../js/change-photo.js"></script>


</html>