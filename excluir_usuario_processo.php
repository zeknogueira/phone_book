<?php 
If($_POST["id_botao_deletar"] != ""){
    require "factory/conexao.php";
    $id = $_POST["id_botao_deletar"];

    $delete_sql = "delete from tbusuario where cod = '$id'";
    
    if(mysqli_query($conexao_banco, $delete_sql)){
        header("Location: tela_usuarios.php");
    } 
    else{
        header("location: tela_usuarios.php?erro=$id");
    }
    
}
else{
    header("Location: tela_usuarios.php?erro=id_nao_enviado");
}
?>