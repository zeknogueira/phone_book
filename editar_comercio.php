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
            $select_query = "select * from tbcomercio where cod = '$id'";
            $select = mysqli_query($conexao_banco, $select_query);
            if ($select->num_rows > 0) {
                $select_result = $select->fetch_assoc();
            }
            ?>

            <form action="editar_comercio_processo.php" method="POST">


                <input type="hidden" name="id_editar" value="<?php echo $select_result["cod"]; ?>">
                <label for="contato">Contato</label>
                <input type="text" name="nome" class="input_nome" placeholder="<?php echo $select_result["contato"]; ?>">
                <label for="contato">Empresa</label>
                <input type="text" name="email" class="input_email"
                    placeholder="<?php echo $select_result["empresa"]; ?>">
                <label for="contato">Telefone</label>
                <input type="text" name="data_nascimento" class="input_data_nascimento"
                    placeholder="<?php echo $select_result["tel"]; ?>">
                <label for="email">Telefone</label>
                <input type="text" name="email" class="input_telefone"
                    placeholder="<?php echo $select_result["email"]; ?>">
                <input type="submit" value="Editar">
            </form>
        </section>

    </main>

</body>

</html>