
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Comércio</title>
</head>

<body>
    <header>
        <?php include "elements/header_padrao.php" ?>
    </header>
    <main>
        <form action="inserir_amigo_processo.php" method="POST">
            <label for="contato">Nome</label>
            <input type="text" name="nome" class="input_nome">
            <label for="contato">Email</label>
            <input type="text" name="email" class="input_email">
            <label for="contato">Data de Nascimento</label>
            <input type="text" name="data_nascimento" class="input_data_nascimento0">
            <label for="email">Telefone</label>
            <input type="text" name="telefone" class="input_telefone">
            <input type="submit" value="Inserir">
        </form>
    </main>
</body>

</html>