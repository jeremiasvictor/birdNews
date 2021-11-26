<?php

require_once 'podcasts.php';
require_once 'conexao.php';

$podcasts = new Podcasts($conexao);

foreach($podcasts->listar() as $podcasts) {
    echo "ID: ".$podcasts['pod_id'];
    echo "<br>";
    echo "Título: ".$podcasts['pod_titulo'];
    echo "<br>";
    echo "Imagem: ".$podcasts['pod_imagem'];
    echo "<br>";
    echo "Url: ".$podcasts['pod_url'];
    echo "<br>";
    echo "<br>";
}

?>