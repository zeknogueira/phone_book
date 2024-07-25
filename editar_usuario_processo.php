<?php
if ($_POST["id_editar"] != "") {
    require "factory/conexao.php";
    
    $id = $_POST["id_editar"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $sql_query = "UPDATE tbusuario SET nome = '$nome', email = '$email', senha = '$senha' WHERE cod = '$id'";
    
    
    if(mysqli_query($conexao_banco, $sql_query)){
        header("Location: tela_usuarios.php");
    }
    else{
        echo "erro";
    }
    

} else {
    header("Location: editar_usuario.php?erro");
}
?>