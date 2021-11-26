<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cadastro_senha.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <title>Login - Bird News</title>
  </head>

  

  <body class="text-center">
    
    <main class="form-signin">

    <a href="index.php"><button class="w-100 btn btn-lg btn-dark" type="button"><- PÁGINA PRINCIPAL</button></a>
        <br><br><br>

        <h1 id="letrap1" class="h3 mb-3 fw-normal">LOGIN</h1>
    
        <br><br>

        <form method="POST" action="realizar_login.php">

          <input name="user_nome" type="text" class="form-control" id="floatingInput" placeholder="Usuário">
          

        <br>
          <input name="user_senha" type="password" class="form-control" id="floatingPassword" placeholder="SENHA">
    
          <label>
            <input type="checkbox" value="remember-me"> LEMBRAR SENHA
          </label>

        <a href="cad_usuarios.php"><button class="w-100 btn btn-lg btn-dark" type="button">NÃO TENHO UMA CONTA</button></a>
        <br><br>
        <input class="w-100 btn btn-lg btn-dark" type="submit" value="ENTRAR">

        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
      </form>
    </main>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
</html>