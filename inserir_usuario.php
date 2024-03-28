<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Usuário</title>
</head>

<body>
    <header>
        <?php include "elements/header_padrao.php" ?>
    </header>
    <main>
        <form action="inserir_usuario_processo.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="input_nome">
            <label for="email">Email</label>
            <input type="text" name="email" class="input_email">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Inserir">
        </form>
    </main>

    <footer>

    </footer>
</body>

</html>