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
        <form action="inserir_comercio_processo.php" method="POST">
            <label for="contato">Contato</label>
            <input type="text" name="contato" class="input_nome" class="input_contato">
            <label for="contato">Empresa</label>
            <input type="text" name="empresa" class="input_nome" class="input_contato">
            <label for="contato">Telefone</label>
            <input type="text" name="telefone" class="input_nome" class="input_telefone">
            <label for="email">Email</label>
            <input type="text" name="email" class="input_email">
            <input type="submit" value="Inserir">
        </form>
    </main>
</body>

</html>