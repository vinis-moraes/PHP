<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Eleições</h1>
    <?php
        $ano = $_GET["an"];
        $idade = 2023 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade>=18 && $idade<65)? "Obrigatório" : "Não obrigatório";
        echo " E dessa forma, seu voto é $tipo"
    ?>
</body>
</html>