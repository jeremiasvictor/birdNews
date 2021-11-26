<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <link rel="stylesheet" href="cad_noticias.css">

    <title>Criar notícia - Bird News</title>
  </head>
  
  <body>

    <!--header-->

    <header>
      <nav>
        <a class="nav-logo" href="painel_adm.php">Painel Administrativo</a>
    </header>
    <br>

<h2 class="folhasp">
  Bird News
</h2>
<br>

</nav>

<main>
  <h1>Criar uma nova notícia</h1>
  <br>

  <form method="POST" action="rec_noticias.php">
    
    <h2>Preencha os campos com as informações da notícia</h2>

      <label for="exampleFormControlInput1" class="form-label">Seu nome(Autor)</label>
      <input type="text" name="not_autor" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
      <br>
      <label for="exampleFormControlInput1" class="form-label">Data</label>
      <input type="date" name="not_data"  class="form-control" id="exampleFormControlInput1" placeholder="00/00/00">
      <label for="exampleFormControlInput1" class="form-label">Contador</label>
      <input type="number" name="not_contador"  class="form-control" id="exampleFormControlInput1" placeholder="00">
      <br>
      <label for="exampleFormControlInput1" class="form-label">Hora</label>
      <input type="time" name="not_hora"  class="form-control" id="exampleFormControlInput1" placeholder="00:00">
      <br>
      <label for="exampleFormControlInput1" class="form-label">Título</label>
      <input type="text" name="not_titulo"  class="form-control" id="exampleFormControlInput1" placeholder="Título">
      <br>
      <label for="exampleFormControlInput1" class="form-label">Subtítulo</label>
      <input type="text" name="not_subtitulo"  class="form-control" id="exampleFormControlInput1" placeholder="Subtítulo">
      <br>
      <label for="exampleFormControlTextarea1" class="form-label">Assunto da notícia</label>
      <textarea class="form-control" name="not_assunto" id="exampleFormControlTextarea1" rows="3"></textarea>
      <br>
      <label for="exampleFormControlInput1" class="form-label">Imagens</label>
      <input type="text" name="not_imagem" class="form-control" id="exampleFormControlInput1" >
      <br>

      <input class="w-100 btn btn-lg btn-dark" type="submit" value="Criar Notícia">

    </form>

</main>
<br>
<br>


<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="text-muted">&copy; 2021 Bird News</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://twitter.com"><img class="fot-icon" src="imagens/twitter.png" alt=""></a></li>
      <li class="ms-3"><a class="text-muted" href="https://instagram.com"><img class="fot-icon"src="imagens/insta.png" alt=""></a></li>
      <li class="ms-3"><a class="text-muted" href="https://pt-br.facebook.com"><img class="fot-icon" src="imagens/face.png" alt=""></a></li>
    </ul>
  </footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  </body>
</html>