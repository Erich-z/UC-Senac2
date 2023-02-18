<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/edithouse.css">
    <title>Document</title>
</head>
<body>
  <main>
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8 mx-auto">
              
              <div class="my-4">
                <h2 class="h3 mb-4 page-title d-flex justify-content-center titleedit">Editar informações da casa</h2>
                  <hr>
                  <form action="#" method="post" class="needs-validation" novalidate>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="cpfimv" class="form-control rounded-pill" placeholder="Informe seu CPF" required/>
                           
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="telimv" class="form-control rounded-pill" placeholder="Informe seu Telefone" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="cepimv" class="form-control rounded-pill" placeholder="Informe seu CEP" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="ruaimv" class="form-control rounded-pill" placeholder="Informe sua Rua" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="bairroimv" class="form-control rounded-pill" placeholder="Informe seu Bairro" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" placeholder="Informe sua Cidade" required/>
                            
                    </div>
                    <span></span>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" placeholder="Informe o Número do endereço" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" placeholder="Descreva seu imóvel" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" placeholder="Número de quartos" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" placeholder="Número de banheiros" required/>
                        
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" placeholder="Número de cozinhas" required/>
                        
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" placeholder="Possui algum diferencial ?" required/>
                        
                    </div>
                </form>
                <hr>
                <div class="d-flex justify-content-center">
                    <h5 class="">Fotos da casa</h5>
                </div>
              </div>
          </div>
      </div>
<!-- Modal gallery -->
<section class="">
    <!-- Section: Images -->
    <section class="">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="../img/img1.jpg"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>
  
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="../img/img2.jpg"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>
  
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="../img/img4.jpg"
              class="w-100"
            />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
              <img
                src="../img/img4.jpg"
                class="w-100"
              />
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>
      </div>
    </section>
    <!-- Section: Images -->
  
    <!-- Section: Modals -->
    <section class="">
      <!-- Modal 1 -->
      <div
        class="modal fade"
        id="exampleModal1"
        tabindex="-1"
        aria-labelledby="exampleModal1Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="">
                <div class="container d-flex justify-content-center aviso" style="margin-bottom: 2rem;"><h5 class="titulo">Selecionar todas imagens juntas.</h5></div>
                <input type="file" id="file-input" accept="image/png, image/jpeg" onchange="preview()" multiple>
                <label for="file-input">
                    <i class="fas fa-upload"></i> &nbsp; Adicionar foto
                </label>
                <p id="num-of-files">Nenhuma foto</p>
                <div id="images"></div>
                
                <button type="button" class="btn btn-primary btn-lg  btn">Anunciar</button>
          </div>
            </div>
  
            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Enviar
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal 2 -->
      <div
        class="modal fade"
        id="exampleModal2"
        tabindex="-1"
        aria-labelledby="exampleModal2Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/wTcNtgA6gHs"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>
  
            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal 3 -->
      <div
        class="modal fade"
        id="exampleModal3"
        tabindex="-1"
        aria-labelledby="exampleModal3Label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/vlDzYIIOYmM"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>
  
            <div class="text-center py-3">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Modals -->
  </section>
  <!-- Modal gallery -->
    </div>
</main>  
         <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
  ></script>     
</body>
</html>