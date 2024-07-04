<?php
if ($_POST["id_editar"] != "") {
    require "factory/conexao.php";
    echo "teste";
    $id = $_POST["id_editar"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $sql_query = "UPDATE tbamigos SET nome = '$nome', email = '$email', datanasc = '$data_nascimento', tel = '$telefone' WHERE cod = '$id'";
    ;
    
    if(mysqli_query($conexao_banco, $sql_query)){
        header("Location: tela_amigos.php");
    }
    else{
        header("Location: editar_amigo.php?erro");
    }
    

} else {
    header("Location: editar_amigo.php?erro");
}
?>