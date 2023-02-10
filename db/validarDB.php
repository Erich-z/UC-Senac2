<?php
include ('./conexao.php');
if (!isset( $_SESSION ) ) {
  session_start();
}


?>

	<?php
    $acesso = $_GET[ 'btnConect' ];
    $login = addslashes( $_GET[ 'txtEmail' ] );
    $senha = addslashes( $_GET['txtSenha'] );

    if ( $acesso == 'Entrar' ) {
      //$comandoSQL = "SELECT * from usuarios where Usuario ='" . $login . "' AND Senha ='" . $senha . "'";
      $comandoSQL = "SELECT * from usuario where usuarioEmail = :login AND usuarioSenha = :senha";
      $comandoExc= $conexao->prepare($comandoSQL);
      $parametrosExc = ['login' => $login, 'senha' => $senha,];
      $comandoExc->execute($parametrosExc);
     

      if ( $result = $comandoExc->fetch(PDO::FETCH_OBJ)) {
        $id_user = $result->usuarioID;
        $_SESSION[ 'ativo' ] = true;
        $_SESSION[ 'login' ] = $login;
        $_SESSION[ 'id' ] = $id_user;
        //echo "Acesso validado!! Aguarde para ser redirecionado!";
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0.5;URL=../index.php'>";
      } else {
       //echo "Acesso bloqueado!! Aguarde para ser redirecionado!";
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0.5;URL=../pages/login.php'>";
       
      }
    } 
    ?>
	

<?php
	$conexao = null;
?>