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

require_once 'usuarios.php';
require_once 'conexao.php';

$usuarios = new Usuarios($conexao);

?>

<table class="tabela_usuarios" border="1">

    <tr>
        <td>ID</td>
        <td>CPF</td>
        <td>IDADE</td>
        <td>SEXO</td>
        <td>NOME</td>
        <td>ESTADO</td>
        <td>SENHA</td>
        <td>EMAIL</td>
        <td>APAGAR</td>
    </tr>

    <?php
    foreach($usuarios->listar() as $usuarios) {
    ?>


    <tr>
        <td>
            <?php echo $usuarios['user_id'];?>
        </td>

        <td>
            <?php echo $usuarios['user_cpf'];?>
        </td>

        <td>
            <?php echo $usuarios['user_idade'];?>
        </td>

        <td>
            <?php echo $usuarios['user_sexo'];?>
        </td>

        <td>
            <?php echo $usuarios['user_nome'];?>
        </td>

        <td>
            <?php echo $usuarios['user_estado'];?>
        </td>

        <td>
            <?php echo $usuarios['user_senha'];?>
        </td>

        <td>
            <?php echo $usuarios['user_email'];?>
        </td>
    
        <td>
            <a href="user_apagar.php?id=<?php echo $usuarios['user_id'];?>"><img src="apagar.png"></a>
        </td>
    </tr>


    <?php
    }
    ?>

</table>