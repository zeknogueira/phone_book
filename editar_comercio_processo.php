<?php
if ($_POST["id_editar"] != "") {
    require "factory/conexao.php";
    echo "teste";
    $id = $_POST["id_editar"];
    $contato = $_POST["contato"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $empresa = $_POST["empresa"];
    $sql_query = "UPDATE tbcomercio SET nome = '$nome', email = '$email', tel = '$telefone', empresa = '$empresa' WHERE cod = '$id'";
    ;
    
    if(mysqli_query($conexao_banco, $sql_query)){
        header("Location: tela_comercios.php");
    }
    else{
        header("Location: editar_comercio.php?erro");
    }
    

} else {
    header("Location: editar_comercio.php?erro");
}
?>