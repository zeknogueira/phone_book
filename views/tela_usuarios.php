<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>

<body>
    <header>
        <?php include "elements/header_padrao.php" ?>
    </header>
    <a href="inserir_usuario.php">Inserir Usuário</a>
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
                        </tr>
                    <?php }
                } ?>
            </tbody>
        </table>

    </main>
    <footer>

    </footer>
</body>

</html>