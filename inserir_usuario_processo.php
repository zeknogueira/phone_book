<?php 
if($_POST["nome"] != ""){
    include_once "factory/conexao.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    echo $nome;
    
    
    $insert_sql = "insert into tbusuario (nome, email, senha) values ('$nome', '$email', '$senha')";
    
   $query = mysqli_query($conexao_banco, $insert_sql);
   header("Location: tela_usuarios.php");
} else{
    echo "Não deu certo";
}
?>