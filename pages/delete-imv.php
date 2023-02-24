<?php 
  include('../db/conexao.php');
  include ('../db/verificaSS.php');
    //$btdel = addslashes($_GET['del']);
    $id = addslashes($_GET['id']);
    //$nome = addslashes($_GET['nome']);
  
   
   
  
   
    $sqlDel = "DELETE FROM anuncio_imagens where anuncioID = $id";
    $sqlDel2 = "DELETE FROM anuncios where anuncioID = $id";
    $sqlDel3 = "DELETE FROM anuncio_comentarios where anuncioID = $id";
  
    try {
        $sqlCadS = $conexao->prepare($sqlDel);
        $sqlCadS->execute();
        $sqlCadS2 = $conexao->prepare($sqlDel2);
        $sqlCadS2->execute();
        $sqlCadS3 = $conexao->prepare($sqlDel3);
        $sqlCadS3->execute();
        header('location: user-profile.php');
    } catch (PDOException $erroFav) {
      print "<script>
                        alert('Não foi possível deletar o anuncio. Verifique! \\n');
                     </script>";
        header('location: user-profile.php');
    }
   




?>