<?php 
include ('../db/conexao.php');
$id =  addslashes($_GET['id']);


$selectImgHouse = ("SELECT imoveis_img from anuncio_imagens where anuncioID = $id");
$selectImgs = $conexao->prepare($selectImgHouse);
$selectImgs->execute();


$selectHouse = ("SELECT * from anuncios WHERE anuncioID = $id");
$selectCasa = $conexao->prepare($selectHouse);
$selectCasa->execute();
$linhaHouse = $selectCasa->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/viewhouse.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <title>In-House</title>
</head>

<body>
    <header>

    </header>
    <main class="">
    
        <div class="swiper mySwiper slide">
            <div class="swiper-wrapper">
            <?php while ($linhaImg = $selectImgs->fetch(PDO::FETCH_OBJ)) { ?>
                <div class="swiper-slide">
                  <img src=".<?php echo $linhaImg->imoveis_img ?>" alt="">
                </div>
                
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
      
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
            <hr>
            <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
              <!-- Controls -->
              <div class="d-flex justify-content-center mb-4">
                <button class="carousel-control-prev position-relative" type="button"
                  data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next position-relative" type="button"
                  data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <!-- Inner -->
              <div class="carousel-inner py-4">
                <!-- Single item -->
                <div class="carousel-item active">
                  <div class="container">
                    <div class="row pb-4">
                      <div class="col-lg-4">
                        <img class="rounded-circle shadow-1-strong mb-4"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
                          style="width: 150px;" />
                        <h5 class="mb-3">Anna Deynah x</h5>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                          officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                        </ul>
                      </div>
            
                      <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                          style="width: 150px;" />
                        <h5 class="mb-3">John Doe</h5>
                          <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                         </p>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                          suscipit laboriosam, nisi ut aliquid commodi.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li>
                            <i class="fas fa-star-half-alt fa-sm"></i>
                          </li>
                        </ul>
                      </div>
            
                      <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                          style="width: 150px;" />
                        <h5 class="mb-3">Maria Kate</h5>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                          praesentium voluptatum deleniti atque corrupti.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="far fa-star fa-sm"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            
                <!-- Single item -->
                <div class="carousel-item">
                  <div class="container">
                    <div class="row pb-4">
                      <div class="col-lg-4">
                        <img class="rounded-circle shadow-1-strong mb-4"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt="avatar"
                          style="width: 150px;" />
                        <h5 class="mb-3">John Doe</h5>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                          officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                        </ul>
                      </div>
            
                      <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar"
                          style="width: 150px;" />
                        <h5 class="mb-3">Alex Rey</h5>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                          suscipit laboriosam, nisi ut aliquid commodi.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li>
                            <i class="fas fa-star-half-alt fa-sm"></i>
                          </li>
                        </ul>
                      </div>
            
                      <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(5).webp" alt="avatar"
                          style="width: 150px;" />
                        <h5 class="mb-3">Maria Kate</h5>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                          praesentium voluptatum deleniti atque corrupti.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="far fa-star fa-sm"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            
                <!-- Single item -->
                <div class="carousel-item">
                  <div class="container">
                    <div class="row pb-4">
                      <div class="col-lg-4">
                        <img class="rounded-circle shadow-1-strong mb-4"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(6).webp" alt="avatar"
                          style="width: 150px;" />
                        <h5 class="mb-3">Anna Deynah</h5>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                          officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                        </ul>
                      </div>
            
                      <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(8).webp" alt="avatar"
                          style="width: 150px;" />
                        <h5 class="mb-3">John Doe</h5>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                          suscipit laboriosam, nisi ut aliquid commodi.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li>
                            <i class="fas fa-star-half-alt fa-sm"></i>
                          </li>
                        </ul>
                      </div>
            
                      <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(7).webp" alt="avatar"
                          style="width: 150px;" />
                        <h5 class="mb-3">Maria Kate</h5>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <p class="text-muted">
                          <i class="fas fa-quote-left pe-2"></i>
                          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                          praesentium voluptatum deleniti atque corrupti.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="fas fa-star fa-sm"></i></li>
                          <li><i class="far fa-star fa-sm"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Inner -->
            </div>
        </div>
        <div class="tab d-lg-none d-flex">
          <i class="fa-sharp fa-solid fa-share-from-square"></i>
          <i class="fa-sharp fa-solid fa-location-dot"></i>
          <i class="fa-solid fa-envelope"></i>
        </div>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</body>

</html>