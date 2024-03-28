<!DOCTYPE html>
<html lang="pt-br">
<?php
require "factory/conexao.php";

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Amigo</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include "elements/header_padrao.php" ?>

    <main>
        <section class="principal_box">
            <?php

            $id = $_GET["botao_editar"];
            $select_query = "select * from tbamigos where cod = '$id'";
            $select = mysqli_query($conexao_banco, $select_query);
            if ($select->num_rows > 0) {
                $select_result = $select->fetch_assoc();
            }
            ?>

            <form action="editar_amigo_processo.php" method="POST">


                <input type="hidden" name="id_editar" value="<?php echo $select_result["cod"]; ?>">
                <label for="contato">Nome</label>
                <input type="text" name="nome" class="input_nome" placeholder="<?php echo $select_result["nome"]; ?>">
                <label for="contato">Email</label>
                <input type="text" name="email" class="input_email"
                    placeholder="<?php echo $select_result["email"]; ?>">
                <label for="contato">Data de Nascimento</label>
                <input type="text" name="data_nascimento" class="input_data_nascimento0"
                    placeholder="<?php echo $select_result["datanasc"]; ?>">
                <label for="email">Telefone</label>
                <input type="text" name="telefone" class="input_telefone"
                    placeholder="<?php echo $select_result["tel"]; ?>">
                <input type="submit" value="Editar">
            </form>
        </section>

    </main>

</body>

</html>