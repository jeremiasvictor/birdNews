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
</html>

<?php

require_once 'noticias.php';
require_once 'conexao.php';

$noticias = new Noticias($conexao);

?>

<table border="1">

    <tr>
        <td>ID</td>
        <td>IMAGEM</td>
        <td>SUBTITULO</td>
        <td>DATA</td>
        <td>CONTADOR</td>
        <td>HORA</td>
        <td>AUTOR</td>
        <td>ASSUNTO</td>
        <td>TÍTULO</td>
        <td>APAGAR</td>
    </tr>

    <?php
    foreach($noticias->listar() as $noticias) {
    ?>


    <tr>
        <td>
            <?php echo $noticias['not_id'];?>
        </td>

        <td>
            <?php echo $noticias['not_imagem'];?>
        </td>

        <td>
            <?php echo $noticias['not_subtitulo'];?>
        </td>

        <td>
            <?php echo $noticias['not_data'];?>
        </td>

        <td>
            <?php echo $noticias['not_contador'];?>
        </td>

        <td>
            <?php echo $noticias['not_hora'];?>
        </td>

        <td>
            <?php echo $noticias['not_autor'];?>
        </td>

        <td>
            <?php echo $noticias['not_assunto'];?>
        </td>

        <td>
            <?php echo $noticias['not_titulo'];?>
        </td>
    
        <td>
            <a href="not_apagar.php?id=<?php echo $noticias['not_id'];?>"><img src="apagar.png"></a>
        </td>
    </tr>


    <?php
    }
    ?>

</table>