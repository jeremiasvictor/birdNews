<?php

require_once 'usuarios.php';
require_once 'conexao.php';

$usuarios = new Usuarios($conexao);

$usuarios->setUser_cpf();
$usuarios->setUser_idade();
$usuarios->setUser_sexo();
$usuarios->setUser_nome();
$usuarios->setUser_estado();
$usuarios->setUser_senha();
$usuarios->setUser_email();

$resultado = $usuarios->alterar();

$resultado = $usuarios->deletar();

?>