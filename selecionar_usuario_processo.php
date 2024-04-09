<?php 


require "factory/conexao.php";

if($_POST["nome"] != ""){
    session_start(); //gambiarra
    $_SESSION["nome_usuario_busca"] = $_POST["nome"];

    header("Location: tela_usuarios.php");
    }

?>