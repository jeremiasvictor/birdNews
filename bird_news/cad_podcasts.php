<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <link rel="stylesheet" href="cad_noticias.css">

    <title>Cadastrar Podcast - Bird News</title>
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

<h1>Cadastrar um Podcast</h1>
  <br>
    
<form method="POST" action="rec_podcasts.php">

    <label for="exampleFormControlInput1" class="form-label">Título do Podcast:</label>
      <input type="text" name="pod_titulo" class="form-control" id="exampleFormControlInput1" placeholder="Título">
      <br>
    <label for="exampleFormControlInput1" class="form-label">Imagem:</label>
      <input type="text" name="pod_imagem"  class="form-control" id="exampleFormControlInput1" placeholder="URL da Imagem">
    <label for="exampleFormControlInput1" class="form-label">Url:</label>
      <input type="text" name="pod_url"  class="form-control" id="exampleFormControlInput1" placeholder="URL do Podcast">
      <br>
    
      <input type="submit" class="w-100 btn btn-lg btn-dark" value="Cadastrar podcast">

</form>

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

</body>
</html>

