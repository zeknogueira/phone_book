<?php
session_start();




if ($_POST["email"] != "") {
    
   
    include_once "factory/conexao.php";
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $select_sql = "SELECT email, senha, nome FROM tbusuario where email = '$email' and senha = $senha;";
    $query = mysqli_query($conexao_banco, $select_sql);

    if ($query->num_rows > 0) {
        $result = $query->fetch_assoc();

        $_SESSION['nome'] = $result["nome"];
        $_SESSION['email'] = $result["email"];
        echo "chegou";
            header("Location: tela_amigos.php");

    } else {
        session_destroy();
        header("Location: login.php?erro=senha_ou_email_incorretos");
    }

    

} else {
    echo "erro";
}