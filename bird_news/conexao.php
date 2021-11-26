<?php

$banco="mysql:host=localhost;dbname=bird_news";
$usuario="root";
$senha="AOTeomaqe";

try{

    $conexao = new \PDO($banco,$usuario,$senha);

} catch(\PDOException $erro){
    echo "Conexão não realizada! <br>";
    echo "Entre em contato com o suporte <br>";
    echo "Erro: ".$erro->getCode();
    echo "<br>";
    echo "Erro: ".$erro->getMessage();
}

?>