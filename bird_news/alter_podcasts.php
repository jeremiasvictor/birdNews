<?php

require_once 'podcasts.php';
require_once 'conexao.php';

$podcasts = new Podcasts($conexao);

$podcasts->setPod_titulo();
$podcasts->setPod_imagem();
$podcasts->setPod_url();

$resultado = $podcasts->alterar();

$resultado = $podcasts->deletar();

?>