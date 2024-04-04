<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comércio</title>
</head>

<body>
    <header>
        <?php include "elements/header_padrao.php" ?>
    </header>
    <main>
        <a href="inserir_comercio.php">Inserir Comércio</a>

        <table>
            <thead>
                <th>Código</th>
                <th>Contato</th>
                <th>Empresa</th>
                <th>Telefone</th>
                <th>Email</th>
            </thead>
            <tbody>
                <?php
                require "factory/conexao.php";
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