<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Comércio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <?php include "elements/header_padrao.php" ?>
    </header>
    <main>
        <section class="main_box">
            <div class="main_elements_box">
                <div class="main_elements_tittle">
                    <h1 class="main_tittle">Novo Amigo</h1>
                </div>
            </div>
            <div class="main_form_box">
                <form class="main_form" action="inserir_amigo_processo.php" method="POST">
                    <div class="main_form_inputs">

                        <input type="text" placeholder="Nome" name="nome" class="input_nome">

                        <input type="text" placeholder="Email" name="email" class="input_email">

                        <input type="text" placeholder="Data de Nascimento" name="data_nascimento"
                            class="input_data_nascimento0">


                        <input type="text" placeholder="Telefone" name="telefone" class="input_telefone">
                    </div>
                    <div class="main_form_submit">

                        <input class="button_input_standart" type="submit" value="Inserir">
                    </div>
                </form>
            </div>
        </section>

    </main>
</body>

</html>