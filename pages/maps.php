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


    <main>
        <div class="card mb-3 ">
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title"><?php echo $linhaHouse->imoveisCidade?></h4>
                  
                    <h4><i class="fas fa-star"></i>4,5</h4>
                </div>
                <div class="">
                <p class="card-text brevDescricao">
                <?php echo $linhaHouse->imoveisDescricao?>
                </p>
                <p class="card-text endereco">
                  <i class="fa-sharp fa-solid fa-location-dot text-dark"></i>  <?php echo $linhaHouse->imoveisRua?> 
               </p>
               <p class="card-text preco">
                <i class="fa-solid fa-brazilian-real-sign text-dark"></i>   <?php echo $linhaHouse->imoveisDiaria?>
               </p>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title">Descrição do imovél</h5>

                <p class="card-text">
                <?php echo $linhaHouse->imoveisDescricao?>
                </p>
            </div>
    </main>
    <div class="tab d-lg-none d-flex">
        <i class="fa-sharp fa-solid fa-share-from-square"></i>
        <i class="fa-sharp fa-solid fa-location-dot"></i>
        <i class="fa-solid fa-envelope"></i>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>

    <script src="../js/main.js"></script>

</body>

</html>