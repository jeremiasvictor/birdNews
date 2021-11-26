<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="painel_adm.css">
</head>

<header>
      <nav>
        <a class="nav-logo" href="painel_adm.php"><- Painel Adiministrativo</a>
    </header>
    <br>

<body>
    
</body>

<?php

require_once 'podcasts.php';
require_once 'conexao.php';

$podcasts = new Podcasts($conexao);

?>

<table border="1">

    <tr>
        <td>ID</td>
        <td>TÍTULO</td>
        <td>IMAGEM</td>
        <td>URL</td>
        <td>APAGAR</td>
    </tr>

    <?php
    foreach($podcasts->listar() as $podcasts) {
    ?>


    <tr>
        <td>
            <?php echo $podcasts['pod_id'];?>
        </td>

        <td>
            <?php echo $podcasts['pod_titulo'];?>
        </td>

        <td>
            <?php echo $podcasts['pod_imagem'];?>
        </td>

        <td>
            <?php echo $podcasts['pod_url'];?>
        </td>
        <td>
            <a href="pod_apagar.php?id=<?php echo $podcasts['pod_id'];?>"><img src="apagar.png"></a>
        </td>
    </tr>


    <?php
    }
    ?>

</table>