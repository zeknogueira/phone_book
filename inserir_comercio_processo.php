<?php 
if($_POST["contato"] != ""){
    include_once "factory/conexao.php";
    $contato = $_POST["contato"];
    $empresa = $_POST["empresa"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $insert_sql = "insert into tbcomercio (contato, empresa, tel, email) values ('$contato', '$empresa', '$telefone', '$email')";
    $query = mysqli_query($conexao_banco, $insert_sql);
    header("Location: tela_comercios.php");
} else{
    echo "erro";
}
?>