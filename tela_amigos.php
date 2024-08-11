<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
} else {

    ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amigos</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php include "elements/header_padrao.php";

        ?>

        <main>
            <section class="main_box">
                <div class="main_elements_box">
                    <div class="main_elements_tittle">
                        <h1 class="main_tittle">Amigos</h1>
                    </div>

                    <!--
                <form action="selecionar_amigo_processo.php" method="POST">
                    <label for="nome">
                        <input type="text" name="nome" id="nome">
                    </label>
                </form>
-->
                </div>
                <div class="main_table_box">

                    <table class="main_table">
                        <thead class="main_table_thead">
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Data de Nascimento</th>
                            <th>Telefone</th>
                            <th class="main_table_thead_th_button_new" colspan="2">
                                <div class="main_table_button_new">
                                    <a href="inserir_amigo.php">
                                        <button class="button_input_standart">
                                            NOVO
                                        </button>
                                    </a>
                                </div>
                            </th>
                        </thead>
                        <tbody class="main_table_tbody">
                            <?php
                            require "factory/conexao.php";

                            if (isset($_SESSION["nome_amigo_busca"])) { // gambiarra
                        
                                $nome_buscado = $_SESSION["nome_amigo_busca"];
                                $sql_query = "select * from tbamigos where nome ='$nome_buscado'";
                                unset($_SESSION["nome_amigo_busca"]);
                                $sql_query_select = $conexao_banco->query($sql_query);
                                if ($sql_query_select->num_rows > 0) {
                                    while ($select_result = $sql_query_select->fetch_assoc()) {
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
                                            <td style="backgroundcolor: aqua">
                                                <form action="editar_amigo.php" method="GET">
                                                    <input type="hidden" name="botao_editar"
                                                        value="<?php echo $select_result["cod"]; ?>">
                                                    <input type="submit" name="botao_editar_enviar" value="EDITAR"
                                                        class="main_table_button" class="main_table_tbody_edit_button">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="excluir_amigo_processo.php" method="POST">
                                                    <input type="hidden" name="id_botao_deletar"
                                                        value="<?php echo $select_result["cod"]; ?>">
                                                    <input type="submit" name="botao_deletar" value="EXCLUIR" class="main_table_button"
                                                        class="main_table_tbody_delete_button">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php }
                                }
                            } else {


                                $sql_query = "select cod, nome, email, DATE_FORMAT(datanasc, '%d-%m-%Y') as data_formatada, tel from tbamigos;";
                                $select = $conexao_banco->query($sql_query);
                                if ($select->num_rows > 0) {

                                    while ($select_result = $select->fetch_assoc()) {
                                        ?>
                                        <tr class="main_table_tbody_tr">
                                            <form action="editar_amigo_processo.php" method="POST">
                                                <td>
                                                    <input
                                                        class=" dados_amigo<?php echo $select_result["cod"]; ?> button_input_standart input_edit"
                                                        name="nome" type="text" value="<?php echo $select_result["nome"]; ?>" readonly>
                                                </td>
                                                <td>
                                                    <input
                                                        class=" dados_amigo<?php echo $select_result["cod"]; ?> button_input_standart input_edit"
                                                        name="email" type="text" class="dados_amigo<?php echo $select_result["cod"]; ?>"
                                                        value="<?php echo $select_result["email"]; ?>" readonly>

                                                </td>
                                                <td>
                                                    <input type="text" 
                                                        class=" dados_amigo<?php echo $select_result["cod"]; ?> button_input_standart input_edit"
                                                        name="data_nascimento" type="text"
                                                        class="dados_amigo<?php echo $select_result["cod"]; ?>"
                                                        value="<?php echo $select_result["data_formatada"]; ?>" readonly>

                                                </td>
                                                <td>
                                                    <input
                                                        class=" dados_amigo<?php echo $select_result["cod"]; ?> button_input_standart input_edit"
                                                        x name="telefone" type="text"
                                                        class="dados_amigo<?php echo $select_result["cod"]; ?>"
                                                        value="<?php echo $select_result["tel"]; ?>" readonly>

                                                </td>
                                                <td class="main_table_edit_button">
                                                    <input name="id_editar" type="hidden" value="<?php echo $select_result["cod"]; ?>">

                                                    <input id="button_edit<?php echo $select_result["cod"]; ?>"
                                                        class="button_input_standart main_table_button main_table_tbody_edit_button"
                                                        type="button" name="botao_editar" value="EDITAR"
                                                        onclick="edit_on(<?php echo $select_result['cod']; ?>)">

                                                    <input id="button_edit_confirm<?php echo $select_result["cod"]; ?>"
                                                        class="button_input_standart main_table_button main_table_tbody_edit_button button_edit_confirm"
                                                        type="submit" name="botao_editar_enviar" value="CONFIRMAR">

                                                </td>
                                            </form>
                                            <td class="main_table_delete_button">
                                                <form action="excluir_amigo_processo.php" method="POST">
                                                    <input type="hidden" name="id_botao_deletar"
                                                        value="<?php echo $select_result["cod"]; ?>">
                                                    <input class="button_input_standart" type="submit" name="botao_deletar"
                                                        value="EXCLUIR" class="main_table_button"
                                                        class="main_table_tbody_delete_button">
                                                </form>
                                            </td>
                                            </form>
                                        </tr>
                                    <?php }
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>

        </main>

        </section>
        <footer>

        </footer>
        <script src="script.js">



        </script>

    </body>

    </html>

    <?php
} ?>