<?php 
$servidor = "localhost";
$banco = "bdagendatb";
$senha = "";
$usuario = "root";

$conexao_banco = new mysqli($servidor,$usuario, $senha, $banco);

$conexao_banco->query("SET NAMES 'utf-8' ");

?>