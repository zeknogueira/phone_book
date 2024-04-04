<?php 
if($_POST["nome"] != ""){
    include_once "factory/conexao.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data_nasc = $_POST["data_nascimento"];

    $insert_sql = "insert into tbamigos (nome, email, tel, datanasc) values ('$nome', '$email', '$telefone', '$data_nasc')";
    $query = mysqli_query($conexao_banco, $insert_sql);
    header("Location: tela_amigos.php");
} else{
    echo "erro";
}
?>