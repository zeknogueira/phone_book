<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Usuários</title>
</head>

<body>
    <header>
        <?php include "elements/header_padrao.php"; 
        session_start()?>
    </header>
    <a href="inserir_usuario.php">Inserir Usuário</a>
    <form action="selecionar_usuario_processo.php" method="POST">
        <label for="nome">
            <input type="text" name="nome" id="nome">
        </label>
    </form>
    <main>
        <table>
            <thead>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>

            </thead>
            <tbody>
                <?php
                require "factory/conexao.php";
                if (isset($_SESSION["nome_usuario_busca"])) { // gambiarra
                
                    $nome_buscado = $_SESSION["nome_usuario_busca"];
                    $sql_query = "select * from tbusuario where nome ='$nome_buscado'";
                    unset($_SESSION["nome_usuario_busca"]);
                    $sql_query_select = $conexao_banco->query($sql_query);
                    if ($sql_query_select->num_rows > 0) {
                        while ($select_result = $sql_query_select->fetch_assoc()) {
                            ?>
                            <tr>
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
                                    <?php echo $select_result["senha"]; ?>
                                </td>
                            </tr>
                        <?php }
                    }
                } else {
                    $sql_query = "select * from tbusuario";
                    $select = $conexao_banco->query($sql_query);
                    if ($select->num_rows > 0) {

                        while ($select_result = $select->fetch_assoc()) {
                            ?>
                            <tr>
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
                                    <?php echo $select_result["senha"]; ?>
                                </td>
                                <td>
                                        <form action="editar_usuario.php" method="GET">
                                            <input type="hidden" name="botao_editar"
                                                value="<?php echo $select_result["cod"]; ?>">
                                            <input type="submit" name="botao_editar_enviar" value="EDITAR"
                                                class="main_table_button" class="main_table_tbody_edit_button">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="excluir_usuario_processo.php" method="POST">
                                            <input type="hidden" name="id_botao_deletar"
                                                value="<?php echo $select_result["cod"]; ?>">
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