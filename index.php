<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
} else {

    ?>
<!DOCTYPE html>
<!--<?php // header("Location: tela_amigos.php"); ?>-->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "elements/header_padrao.php" ?>

    <main>
        <section class="principal_box">
            <div>
                <h2>Usuários:
                    <?php
                    require "factory/conexao.php";
                    $selecionar = "SELECT COUNT(cod) FROM tbusuario";
                    $selecionar_funcao = mysqli_query($conexao_banco, $selecionar);
                    if ($selecionar_funcao->num_rows > 0) {
                        $result = $selecionar_funcao->fetch_assoc();
                        var_dump($selecionar_funcao);
                           
                        
                    } 
                    
                    else {
                        echo "errou";
                    }

                    ?>
                </h2>
            </div>

        </section>

    </main>

</body>

</html>
<?php } ?>