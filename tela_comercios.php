<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Comércio</title>
</head>

<body>

    <?php session_start(); ?>
    <header>
        <?php include "elements/header_padrao.php" ?>
    </header>
    <main>
        <a href="inserir_comercio.php">Inserir Comércio</a>
        <form action="selecionar_comercio_processo.php" method="POST">
            <label for="nome">
                <input type="text" name="nome" id="nome">
            </label>
        </form>

        <table>
            <thead>
                <th>Código</th>
                <th>Contato</th>
                <th>Empresa</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>teste</th>
                <th>teste</th>
            </thead>
            <tbody>
                <?php
                require "factory/conexao.php";
                if (isset($_SESSION["nome_comercio_busca"])) { // gambiarra
                
                    $nome_buscado = $_SESSION["nome_comercio_busca"];
                    $sql_query = "select * from tbcomercio where contato ='$nome_buscado'";
                    unset($_SESSION["nome_comercio_busca"]);
                    $sql_query_select = $conexao_banco->query($sql_query);
                    if ($sql_query_select->num_rows > 0) {
                        while ($select_result = $sql_query_select->fetch_assoc()) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $select_result["cod"]; ?>
                                </td>
                                <td>
                                    <?php echo $select_result["contato"]; ?>
                                </td>
                                <td>
                                    <?php echo $select_result["empresa"]; ?>
                                </td>
                                <td>
                                    <?php echo $select_result["tel"]; ?>
                                </td>
                                <td>
                                    <?php echo $select_result["email"]; ?>
                                </td>
                                <td>
                                    
                                    <form action="editar_comercio.php" method="GET">
                                        <input type="hidden" name="botao_editar" value="<?php echo $select_result["cod"]; ?>">
                                        <input type="submit" name="botao_editar_enviar" value="EDITAR" class="main_table_button"
                                            class="main_table_tbody_edit_button">
                                    </form>
                                </td>
                                <td>
                                    <form action="excluir_comercio_processo.php" method="POST">
                                        <input type="hidden" name="id_botao_deletar" value="<?php echo $select_result["cod"]; ?>">
                                        <input type="submit" name="botao_deletar" value="EXCLUIR" class="main_table_button"
                                            class="main_table_tbody_delete_button">
                                    </form>
                                </td>
                            </tr>
                        <?php }
                    }
                } else {
                    $sql_query = "select * from tbcomercio";
                    $select = $conexao_banco->query($sql_query);
                    if ($select->num_rows > 0) {

                        while ($select_result = $select->fetch_assoc()) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $select_result["cod"]; ?>
                                </td>
                                <td>
                                    <?php echo $select_result["contato"]; ?>
                                </td>
                                <td>
                                    <?php echo $select_result["empresa"]; ?>
                                </td>
                                <td>
                                    <?php echo $select_result["tel"]; ?>
                                </td>
                                <td>
                                    <?php echo $select_result["email"]; ?>
                                </td>
                                <td>
                                    
                                    <form action="editar_comercio.php" method="GET">
                                        <input type="hidden" name="botao_editar" value="<?php echo $select_result["cod"]; ?>">
                                        <input type="submit" name="botao_editar_enviar" value="EDITAR" class="main_table_button"
                                            class="main_table_tbody_edit_button">
                                    </form>
                                </td>
                                <td>
                                    <form action="excluir_comercio_processo.php" method="POST">
                                        <input type="hidden" name="id_botao_deletar" value="<?php echo $select_result["cod"]; ?>">
                                        <input type="submit" name="botao_deletar" value="EXCLUIR" class="main_table_button"
                                            class="main_table_tbody_delete_button">
                                    </form>
                                </td>
                            </tr>
                        <?php }
                    }
                } ?>
            </tbody>
        </table>

    </main>
    <footer>

    </footer>

</body>

</html>