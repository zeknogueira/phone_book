<!DOCTYPE html>
<html lang="pt-br">
<?php
require "factory/conexao.php";

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comercio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include "elements/header_padrao.php" ?>

    <main>
        <section class="principal_box">
            <?php

            $id = $_GET["botao_editar"];
            
            $select_query = "select * from tbusuario where cod = '$id'";
            $select = mysqli_query($conexao_banco, $select_query);
            if ($select->num_rows > 0) {
                $select_result = $select->fetch_assoc();
            }
            ?>

            <form action="editar_usuario_processo.php" method="POST">


                <input type="hidden" name="id_editar" value="<?php echo $select_result["cod"]; ?>">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="input_nome" placeholder="<?php echo $select_result["nome"]; ?>">
                <label for="contato">Email</label>
                <input type="text" name="email" class="input_email"
                    placeholder="<?php echo $select_result["email"]; ?>">
                <label for="contato">Senha</label>
                <input type="password" name="senha" class="input_data_nascimento"
                    placeholder="<?php echo $select_result["senha"]; ?>">
                <input type="submit" value="Editar">
            </form>
        </section>

    </main>

</body>

</html>