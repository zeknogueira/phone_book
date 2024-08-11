<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <main>
        <section class="main_box">
            <div class="main_elements_box">
                <div class="main_elements_tittle">
                    <h1 class="main_tittle">Agenda</h1>
                </div>
            </div>
            <div class="main_form_box">
                <form class="main_form" action="login_processo.php" method="POST">
                    <div class="main_form_inputs">

                        <input type="text" name="email" class="input_email" placeholder="email">

                        <input type="password" name="senha" class="input_password" placeholder="senha">

                    </div>
                    <div class="main_form_submit">
                        <input class="button_input_standart" type="submit" value="Entrar">
                    </div>

                </form>
            </div>
        </section>

    </main>

</body>

</html>