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
        <section class="main_box">
            <div class="main_elements_box">
                <div class="main_elements_tittle">
                    <h1 class="main_tittle">Editar Amigo</h1>
                </div>
            </div>
            <?php

            $id = $_GET["botao_editar"];
            $select_query = "select * from tbamigos where cod = '$id'";
            $select = mysqli_query($conexao_banco, $select_query);
            if ($select->num_rows > 0) {
                $select_result = $select->fetch_assoc();
            }
            ?>
            <div class="main_form_box">
                <form class="main_form" action="editar_amigo_processo.php" method="POST">
                    <div class="main_form_inputs">

                        <input type="hidden" name="id_editar" value="<?php echo $select_result["cod"]; ?>">

                        <input type="text" name="nome" class="input_nome"
                            placeholder="<?php echo $select_result["nome"]; ?>">

                        <input type="text" name="email" class="input_email"
                            placeholder="<?php echo $select_result["email"]; ?>">

                        <input type="text" name="data_nascimento" class="input_data_nascimento0"
                            placeholder="<?php echo $select_result["datanasc"]; ?>">

                        <input type="text" name="telefone" class="input_telefone"
                            placeholder="<?php echo $select_result["tel"]; ?>">
                    </div>
                    <div class="main_form_submit">
                    <input class="button_input_standart" type="submit" value="Editar">
                    </div>

                </form>
            </div>
        </section>

    </main>

</body>

</html>