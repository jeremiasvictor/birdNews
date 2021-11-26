<?php

require_once 'noticias.php';
require_once 'conexao.php';

$noticias = new Noticias($conexao);

foreach($noticias->listar() as $noticias) {
    echo "ID: ".$noticias['not_id'];
    echo "<br>";
    echo "Imagem: ".$noticias['not_imagem'];
    echo "<br>";
    echo "Subtítulo: ".$noticias['not_subtitulo'];
    echo "<br>";
    echo "Data: ".$noticias['not_data'];
    echo "<br>";
    echo "Contador: ".$noticias['not_contador'];
    echo "<br>";
    echo "Hora: ".$noticias['not_hora'];
    echo "<br>";
    echo "Autor: ".$noticias['not_autor'];
    echo "<br>";
    echo "Assunto: ".$noticias['not_assunto'];
    echo "<br>";
    echo "Título: ".$noticias['not_titulo'];
    echo "<br>";
    echo "<br>";
}