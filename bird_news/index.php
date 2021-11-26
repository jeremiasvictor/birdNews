<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Bird News</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


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

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>

<?php

require_once 'noticias.php';
require_once 'podcasts.php';
require_once 'usuarios.php';
require_once 'conexao.php';

$noticias = new Noticias($conexao);
$podcasts = new Podcasts($conexao);
$usuarios = new Usuarios($conexao);

?>

    
<!--header-->

<header class="navbar navbar-expand-md navbar-dark">
  <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
    <a class="navbar-brand p-0 me-2" href="/" aria-label="Bootstrap">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>

    </button>

    <div class="collapse navbar-collapse" id="bdNavbar">
      <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');">Home</a>
        </li>
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="#" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Icons');" target="_blank" rel="noopener">Suporte</a>
        </li>
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="login.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Icons');" target="_blank" rel="noopener">Login</a>
        </li>
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="cad_usuarios.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Icons');" target="_blank" rel="noopener">Cadastrar-se</a>
        </li>
        <li class="nav-item col-6 col-md-auto">
          <div class="dropdown">
              <button id="dropdown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Noticias
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item active" href="#">Politica</a></li>
                <li><a class="dropdown-item" href="#">Esporte</a></li>
                <li><a class="dropdown-item" href="#">Podcast</a></li>
                <li><a class="dropdown-item" href="#">Futboll</a></li>
                <li><a class="dropdown-item" href="#">Agricultura</a></li>
              </ul>
            </div>
        </li>
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="painel_adm.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" target="_blank" rel="noopener">Painel Administrativo</a>
        </li>
      </ul>



      <div class="maru"> <b>
          BN News
      </b>
      </div>



      <hr class="d-md-none text-white-50">

      <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
        <li class="nav-item col-6 col-md-auto">
          </a>
        </li>
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="https://twitter.com/getbootstrap" target="_blank" rel="noopener">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 512 416.32" role="img"><title>Twitter</title><path fill="currentColor" d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92"/></svg>
            <small class="d-md-none ms-2">Twitter</small>
          </a>
        </li>
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="https://bootstrap-slack.herokuapp.com/" target="_blank" rel="noopener">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 512 512" role="img"><title>Slack</title><path fill="currentColor" d="M210.787 234.832l68.31-22.883 22.1 65.977-68.309 22.882z"/><path fill="currentColor" d="M490.54 185.6C437.7 9.59 361.6-31.34 185.6 21.46S-31.3 150.4 21.46 326.4 150.4 543.3 326.4 490.54 543.34 361.6 490.54 185.6zM401.7 299.8l-33.15 11.05 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.38-68.36 22.92 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.43-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.5-13.92 2.87-29.06 16.78-33.56l33.12-11.03-22.1-65.9-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.48-13.93 2.89-29.07 16.81-33.58l33.15-11.05-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.46 34.38 68.36-22.92-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.47 34.42 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.87 29.06-16.78 33.56L329.7 194.6l22.1 65.9 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.88 29.07-16.81 33.57z"/></svg>
            <small class="d-md-none ms-2">Slack</small>
          </a>
        </li>
        
        <li class="nav-item col-6 col-md-auto">
          <a class="nav-link p-2" href="https://opencollective.com/bootstrap" target="_blank" rel="noopener">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" fill-rule="evenodd" class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 40 41" role="img"><title>Open Collective</title><path fill-opacity=".4" d="M32.8 21c0 2.4-.8 4.9-2 6.9l5.1 5.1c2.5-3.4 4.1-7.6 4.1-12 0-4.6-1.6-8.8-4-12.2L30.7 14c1.2 2 2 4.3 2 7z"/><path d="M20 33.7a12.8 12.8 0 0 1 0-25.6c2.6 0 5 .7 7 2.1L32 5a20 20 0 1 0 .1 31.9l-5-5.2a13 13 0 0 1-7 2z"/></svg>
            <small class="d-md-none ms-2">Open Collective</small>
          </a>
        </li>
      </ul>
      <div class="dropdown">
          <button id="dropdown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
              Perfil
          </button>
          <ul  class="dropdown-menu dropdown-menu-primary" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item" href="#">Cadastre-se</a></li>
            <li><a class="dropdown-item" href="#">Entrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Configuração</a></li>
          </ul>
        </div>
    </div>
  </nav>
</header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">Mundo</a>
      <a class="p-2 link-secondary" href="#">Brasil</a>
      <a class="p-2 link-secondary" href="#">Tecnologia</a>
      <a class="p-2 link-secondary" href="#">Design</a>
      <a class="p-2 link-secondary" href="#">Cultura</a>
      <a class="p-2 link-secondary" href="#">Negócios</a>
      <a class="p-2 link-secondary" href="#">Política</a>
      <a class="p-2 link-secondary" href="#">Opiniões</a>
      <a class="p-2 link-secondary" href="#">Ciências</a>
      <a class="p-2 link-secondary" href="#">Saúde</a>
      <a class="p-2 link-secondary" href="#">Estilo</a>
      <a class="p-2 link-secondary" href="#">Viagens</a>
    </nav>
  </div>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Polônia decide que tratados da UE ferem soberania e aumenta crise com bloco</h1>
      <p class="lead mb-0"><a href="pag_noticia.php" class="text-white fw-bold">Continue lendo...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Brasil</strong>
          <h3 class="mb-0">Brasil tem mais 15.726 casos e 451 mortes por Covid</h3>
          <div class="mb-1 text-muted">7 de Outubro</div>
          <p class="card-text mb-auto">Com os números desta quinta, o país voltou a ter uma leve queda na média móvel de casos dos últimos sete dias, chegando a 15.069 contágios (eram 16.755 um dia antes)</p>
          <a href="pag_noticia.php" class="stretched-link">Continue lendo</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" src="" alt="" height="20%">

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Brasil</strong>
          <h3 class="mb-0">STF forma maioria para barrar showmícios, mas libera artistas em eventos de arrecadação</h3>
          <div class="mb-1 text-muted">7 de Outubro</div>
          <p class="mb-auto">O STF (Supremo Tribunal Federal) formou maioria nesta quinta-feira (7) para manter a proibição aos showmícios nas eleições.</p>
          <a href="pag_noticia.php" class="stretched-link">Continue lendo</a>
        </div>
        <div class="col-auto d-none d-lg-block"></div>

        </div>
      </div>
    </div>
  </div>


      <div class="container">
        <div class="row">
          <div class="col">
            
      <div class="card" id="card-grande">
        <img class="not-img" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAPfQAW.img?h=450&w=799&m=6&q=60&o=f&l=f" alt="">

        <div class="card-body">
          <a href="pag_noticia.php" class="card-title">Nova linhagem humana é descoberta depois de análise de esqueleto de 7 mil anos</a>
         
          <p class="card-text"><small class="text-muted">1 hora atrás</small></p>
        </div>
      </div>

          </div>
          <div class="col">
            <div class="card" id="card-grande">
                <img class="not-img" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAPfBhu.img?h=449&w=799&m=6&q=60&o=f&l=f&x=731&y=170" alt="">
        
                <div class="card-body">
                  <a href="pag_noticia.php" class="card-title">Após iniciar aulas em universidade, Suzane von Richthofen passou a ficar em cela individual</a>
                 
                  <p class="card-text"><small class="text-muted">33 minutos atrás</small></p>
                </div>
              </div>
          </div>
          <br>
          <br>

    <div class="flex-container">
          
    <?php
    foreach($noticias->listar() as $noticias) {
    ?>

<div class="flex-item">

<div class="card">
  <img src="<?php echo $noticias['not_imagem'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $noticias['not_titulo'];?></h5>
    <p class="card-text"><?php echo $noticias['not_subtitulo'];?></p>
    <a href="pag_noticia.php" class="btn btn-primary">Leia mais</a>
  </div>
</div>

</div>

      <?php
        }
      ?>

      </div>
      <br>
      <br>

<!-- **************** -->
              
<br>
<br>

    <h2 class="pb-2 border-bottom">Podcasts</h2>

      <div class="flex-container">
          
      <?php
    foreach($podcasts->listar() as $podcasts) {
    ?>


<div class="flex-item-pod">

<div class="card">
  <img src="<?php echo $podcasts
  ['pod_imagem'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $podcasts['pod_titulo'];?></h5>
    <a href="<?php echo $podcasts['pod_url'];?>" class="btn btn-primary">Ver podcast</a>
  </div>
</div>

</div>

      <?php
        }
      ?>

      </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col">
        
  <div class="card" id="card-grande">
    <img class="not-img" src="https://media.moneytimes.com.br/uploads/2021/06/paulo-guedes-4.jpg" alt="">

    <div class="card-body">
      <a href="pag_noticia.php" class="card-title">Guedes diz que se afastou de offshore e que o 'resto é barulho, barulho e barulho'
      </a>
     
      <p class="card-text"><small class="text-muted">2 hora atrás</small></p>
    </div>
  </div>

      </div>
      <div class="col">
        <div class="card" id="card-grande">
            <img class="not-img" src="https://images.prismic.io/portal-de-planos/e876bf84-cc62-4ec7-a8e8-4f716a6c356d_como-transferir-credito-da-claro-para-outro-celular.jpg?auto=compress,format&rect=0,58,724,366&w=740&h=374" alt="">
    
            <div class="card-body">
              <a href="pag_noticia.php" class="card-title">4 dias depois da pane, Instagram e Facebook registram nova instabilidade</a>
             
              <p class="card-text"><small class="text-muted">40 minutos atrás</small></p>
            </div>
          </div>
      </div>

</main>
      <!--footer-->

      
      <footer class="bd-footer py-0 mt-0 bg-dark">
        <div class="container py-3">
          <div class="row">
            <div class="col-lg-3 mb-3">
              <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"/></svg>
                <a class="fot-logo" href="index.php" class="malac">BIRD NEWS</a>
              </a>
              <ul class="list-unstyled small text-muted">
                <li class="mb-2">Projetado Foi Construído Com Todo Amor Do Mundo Pelo <a href="/docs/5.1/about/team/"><b>Mateus ,Jeremias, Erika, Rodrigo</b></a> Com Ajuda Dos Nossos Colaboradores.</li>
                <li class="mb-2">COLABORADORES <a href="#" target="_blank" rel="license noopener"><b>NIKE BRASIL</b></a>, + <a href="#" target="_blank" rel="license noopener"><b>LACOSTE</b></a> + <a href="#" target="_blank" rel="license noopener"><b>SENAC</b></a>.</li>
                <li class="mb-2"> <b> Atualmente v5.1.2.</b></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h5 class="malac">Blog</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="/">Sobre Nôs</a></li>
                <li class="mb-2"><a href="/docs/5.1/">Polìtica De Privacidade</a></li>
                <li class="mb-2"><a href="/docs/5.1/examples/">Eventos</a></li>
                <li class="mb-2"><a href="https://themes.getbootstrap.com/">Temas</a></li>
                <li class="mb-2"><a href="https://blog.getbootstrap.com/">Outra Seções</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5 class="malac">Ultimas Noticias</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="/docs/5.1/getting-started/">Esporte</a></li>
                <li class="mb-2"><a href="/docs/5.1/examples/starter-template/">Politica</a></li>
                <li class="mb-2"><a href="/docs/5.1/getting-started/webpack/">Podcast</a></li>
                <li class="mb-2"><a href="/docs/5.1/getting-started/webpack/">Futebol</a></li>
                <li class="mb-2"><a href="/docs/5.1/getting-started/webpack/">Agricultura</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5 class="malac">Encontre-nos</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap">Instagram</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev">Faceboock</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/icons">Twitter</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/rfs">Whatsapp</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap-npm-starter">Comunidade</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5 class="malac">Assine Bird Premium</h5>
              <ul class="list-unstyled">
                <li class="mb-2">Tenha Varios <a href="/docs/5.1/about/team/"><b>Beneficios</b></a>
                    <br>
                informe Seu Email Para Enviarmos As Intrucoes De Como Assinar O Premium.
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="@Email" aria-label="Search">
                <button id="rodap" class="btn btn-outline-success" type="button">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </footer> 
    
  </body>
</html>
