<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idênticos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Idênticos</h1>

    <?php
        $a = 3;
        $b = "3";
        $r = $a === $b ? "SIM" : "NÃO";

        echo "As variáveis são iguais? $r"
    ?>
</body>
</html>