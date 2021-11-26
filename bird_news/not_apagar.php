<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1; URL='painel_adm.php'"/>
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

require_once 'noticias.php';
require_once 'conexao.php';

$noticias = new Noticias($conexao);

$id = $_GET['id'];

$resultado = $noticias->deletar($id);

if($resultado){ 
    echo "Registro ".$id." apagado com sucesso!";
}

?>