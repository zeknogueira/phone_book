<?php 
If($_POST["id_botao_deletar"] != ""){
    require "factory/conexao.php";
    $id = $_POST["id_botao_deletar"];

    $delete_sql = "delete from tbcomercio where cod = '$id'";
    
    if(mysqli_query($conexao_banco, $delete_sql)){
        header("Location: tela_comercios.php");
    } 
    else{
        header("location: tela_comercios.php?erro=$id");
    }
    
}
else{
    header("Location: tela_comercios.php?erro=id_nao_enviado");
}
?>