<?php

require_once 'noticias.php';
require_once 'conexao.php';

$noticias = new Noticias($conexao);

$noticias->setNot_imagem();
$noticias->setNot_subtitulo();
$noticias->setNot_data();
$noticias->setNot_contador();
$noticias->setNot_hora();
$noticias->setNot_autor();
$noticias->setNot_assunto();
$noticias->setNot_titulo();

$resultado = $noticias->alterar();

$resultado = $noticias->deletar();

?>