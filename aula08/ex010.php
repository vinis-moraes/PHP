<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Formulário</h1>
    <div>
        <?php
            $nome = isset($_GET["nome"])? $_GET["nome"] : "[Não informado]";
            $ano = isset($_GET["ano"])? $_GET["ano"] : "[Não informado]";
            $sexo = isset($_GET["sexo"])? $_GET["sexo"]: "[Não informado]";
            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos."
        ?>
    </div>
    <br>
    <a href="ex010.html">Voltar para Início</a>
</body>
</html>