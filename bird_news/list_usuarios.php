<?php

require_once 'usuarios.php';
require_once 'conexao.php';

$usuarios = new Usuarios($conexao);

foreach($usuarios->listar() as $usuarios) {
    echo "ID: ".$usuarios['user_id'];
    echo "<br>";
    echo "CPF: ".$usuarios['user_cpf'];
    echo "<br>";
    echo "Idade: ".$usuarios['user_idade'];
    echo "<br>";
    echo "Sexo: ".$usuarios['user_sexo'];
    echo "<br>";
    echo "Nome: ".$usuarios['user_nome'];
    echo "<br>";
    echo "Estado: ".$usuarios['user_estado'];
    echo "<br>";
    echo "Senha: ".$usuarios['user_senha'];
    echo "<br>";
    echo "Email: ".$usuarios['user_email'];
    echo "<br>";
    echo "<br>";
}

?>