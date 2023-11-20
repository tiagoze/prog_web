<?php

$host = 'Localhost';
$usuario = 'root';
$senha = '';
$database = 'usuarios';

$conexao = new mysqli($host, $usuario, $senha ,  $database );

if($conexao->error)
{
    echo "erro";
}
else
{
    echo "conexão efetuada com sucesso";
}




?>
