<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
  </head>
  <body>
    <main class="container login-page">
      <h1 class="text-center logo-text">Bem vindo, InHouse</h1>
      <div class="logo">
        <img src="../img/preto-pessoa.png" class="img-fluid" alt="" />
      </div>
      <form action="signin2.php" method="get" class="needs-validation" novalidate>
       <div class="login d-grid gap-2">
        <div class="form-outline">
          <input
            type="text"
            name="txtName"
            class="form-control rounded-pill"
            placeholder="Nome Completo"
            required
          />
          <div class="invalid-feedback ms-2">Por favor, insira seu nome completo</div>
        </div>
        <div class="form-outline">
          <input
            type="text"
            name="txtEmail"
            id="formEmail"
            class="form-control rounded-pill"
            placeholder="Email"
            required
          />
          <div class="invalid-feedback ms-2">Por favor, insira seu email</div>
        </div>

        <div class="form-outline">
          <input
            type="password"
            name="txtSenha"
            id="formPassword"
            class="form-control rounded-pill "
            placeholder="senha"
            required
          />
          <div class="invalid-feedback ms-2">Por favor, insira sua senha</div>
          <i class="fas eye-icon fa-eye-slash"></i>
        </div>
        <div class="form-outline">
          <input
            type="password"
            id="formPassword"
            class="form-control rounded-pill "
            placeholder="confirme sua senha"
            required
          />
          <div class="invalid-feedback ms-2">Por favor, confirme sua senha</div>
        </div>
        
      </div>
    
      <div class="d-grid gap-2 buttons-login pt-2">
        <button type="submit" name="btncad" class="btn btn-primary enter-button mx-5 mt-3">
          Criar conta
        </button>
      </div>
      </form>
      <div class="mt-3 text-center">
        <p class="m-0">Já possui conta? <a href="./login.html">Entrar</a></p>
      </div>

      <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
      ></script>
      <script src="../js/main.js"></script>
    </main>
  </body>
</html>
