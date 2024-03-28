<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "elements/header_padrao.php" ?>

    <main>
        <section class="main_box">
            <div class="main_elements_box">

                <a href="inserir_amigo.php">
                    <button>
                        Inserir Amigo
                    </button>
                </a>
            </div>
            <div class="main_table_box">
                <table class="main_table">
                    <thead class="main_table_thead">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data de Nascimento</th>
                        <th>Telefone</th>
                    </thead>
                    <tbody class="main_table_tbody">
                        <?php
                        require "factory/conexao.php";
                        $sql_query = "select * from tbamigos";
                        $select = $conexao_banco->query($sql_query);
                        if ($select->num_rows > 0) {

                            while ($select_result = $select->fetch_assoc()) {
                                ?>
                                <tr class="main_table_tbody_tr">
                                    <td>
                                        <?php echo $select_result["cod"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $select_result["nome"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $select_result["email"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $select_result["datanasc"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $select_result["tel"]; ?>
                                    </td>
                                    <td>
                                        <form action="editar_amigo.php" method="GET">
                                            <input type="hidden" name="botao_editar" value="<?php echo $select_result["cod"];?>">
                                            <input type="submit" name="botao_editar_enviar" value="EDITAR" class="main_table_button" class="main_table_tbody_edit_button">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="excluir_amigo_processo.php" method="POST">
                                            <input type="hidden" name="id_botao_deletar" value="<?php echo $select_result["cod"];?>">
                                            <input type="submit" name="botao_deletar" value="EXCLUIR" class= "main_table_button" class="main_table_tbody_delete_button">
                                        </form>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                    </tbody>
                </table>
            </div>

    </main>

    </section>
    <footer>

    </footer>

</body>

</html>