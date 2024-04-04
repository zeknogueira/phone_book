<?php 
$servidor = "localhost";
$banco = "bdagendatb";
$senha = "";
$usuario = "root";

$conexao_banco = mysqli_connect($servidor,$usuario, $senha, $banco);

$conexao_banco->query("SET NAMES 'utf-8' ");

?>