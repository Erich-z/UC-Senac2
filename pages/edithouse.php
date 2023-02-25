<?php
include('../db/conexao.php');
include ('../db/verificaSS.php');
include ('../db/isLogged.php');
if($isLogged){
  $usuarioLogin = $_SESSION['id'];
}else{
  $usuarioLogin = 0;
}
$anuncioID = 0;
$anuncioID = $_GET['id'];
//echo $anuncioID;
$sqlEdit = ("SELECT * FROM anuncios WHERE ANusuarioID = '$usuarioLogin' ");
//$sqlEdit = ("SELECT * FROM anuncios INNER JOIN anuncio_imagens ON anuncios.anuncioID =
//            anuncio_imagens.imagemID WHERE anuncios.anuncioID = '$anuncioID' AND anuncios.ANusuarioID = '$usuarioLogin'");
$sqlEdita = $conexao->prepare($sqlEdit);
$sqlEdita->execute();

$linhaEdit = $sqlEdita->fetch(PDO::FETCH_OBJ);

$sqlImgEdit = ("SELECT * FROM anuncio_imagens WHERE anuncioID = '$usuarioLogin'");
$sqlImgEdita = $conexao->prepare($sqlImgEdit);
$sqlImgEdita->execute();


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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
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
                  <form action="edithouse2.php" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="cepimv" class="form-control rounded-pill" value="<?php echo $linhaEdit->imoveisCep?>" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="ruaimv" class="form-control rounded-pill" value="<?php echo $linhaEdit->imoveisRua?>" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="bairroimv" class="form-control rounded-pill" value="<?php echo $linhaEdit->imoveisBairro?>" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill"value="<?php echo $linhaEdit->imoveisCidade?>" required/>
                            
                    </div>
                    
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" value="<?php echo $linhaEdit->imoveisNumero?>" required/>   
                    </div>
                    <span></span>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" value="<?php echo $linhaEdit->imoveisDescricao?>"required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" value="<?php echo $linhaEdit->imoveisQuarto?>" required/>
                            
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" value="<?php echo $linhaEdit->imoveisBanheiro?>" required/>
                        
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" value="<?php echo $linhaEdit->imoveisCozinha?>" required/>
                        
                    </div>
                    <div class="login d-grid gap-2">
                        <div class="form-outline">
                          <input  type="text" id="" class="form-control rounded-pill" value="<?php echo $linhaEdit->imoveisDiferencial?>"required/>
                        
                    </div>
                  </form>
                <hr>
                <div class="d-flex justify-content-center">
                    <h5 class="">Fotos da casa</h5>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="">Para alterar a foto click, na imagem desejada!</p>
                </div>
              </div>
          </div>
      </div>
<!-- Modal gallery -->
<!-- Section: Images -->

    <section class="">
      <div class="row">
        <?php while ($linhaImg = $sqlImgEdita->fetch(PDO::FETCH_OBJ)) { ?>
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <div class="imageContainer">
          
            <img
              src=".<?php echo $linhaImg->imoveis_img?>" alt=""
              class="imgPhoto"
            />
            <input type="file" class="flImage" name="fImage" accept="image/*">
           </div> 
          </div>
          <?php } ?>    
      

    </section>
   
    <!-- Section: Images -->
  
    <!-- Section: Modals -->
    
  <!-- Modal gallery -->
  <div class="d-grid gap-2 d-md-block">
    <input type="submit" name="btCad" id="btCad" value="Alterar" class=" btn btn-primary buttonenviar">
</div>  
</div>
</main> 
<div class="tab d-lg-none d-flex">
    <i class="fas fa-search"></i>
    <i class="fas fa-heart"></i>
    <i class="fas fa-user"></i>
  </div>
  <script src="../js/edithouse.js"></script> 
         <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
  ></script>     
</body>
</html>