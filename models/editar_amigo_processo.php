<?php
if ($_POST["id_editar"] != "") {
    require "factory/conexao.php";
    $id = $_POST["id_editar"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $sql_query = "update from tbamigos set nome = '$nome', email = '$email', datanasc = '$data_nascimento', tel = '$telefone' where cod = '$id'";
    $select = mysqli_query($conexao_banco, $sql_query);
    
    
    header("Location: tela_amigos.php");

} else {
    header("Location: editar_amigo.php?erro");
}
?>