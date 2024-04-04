<?php 


require "factory/conexao.php";

if($_POST["nome"] != ""){
    session_start(); //gambiarra
    $_SESSION["nome_comercio_busca"] = $_POST["nome"];

    header("Location: tela_comercios.php");
    }

?>