<?php

require_once(__DIR__.'/classe_query.php');
require_once(__DIR__.'/modelo/model_adm.php');
require_once(__DIR__.'/modelo/model_funcionario.php');
require_once(__DIR__.'/modelo/model_fornecedor.php');
require_once(__DIR__.'/constante.php');

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "php-cms";


$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $banco
);


if(mysqli_connect_errno()) {
    trigger_error(mysqli_connect_error());
}