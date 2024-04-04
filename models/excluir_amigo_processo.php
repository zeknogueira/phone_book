<?php 
If($_POST["id_botao_deletar"] != ""){
    require "factory/conexao.php";
    $id = $_POST["id_botao_deletar"];
    echo $id;
    $delete_sql = "delete from tbamigos where cod = '$id'";
    mysqli_query($conexao_banco, $delete_sql);
    header("Location: tela_amigos.php");
}
else{
    header("Location: tela_amigos.php?erro=id_nao_enviado");
}
?>