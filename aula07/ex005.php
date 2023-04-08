<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Operação</h1>
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $tipo = $_GET["op"];
    echo "Os valores passados foram $n1 e $n2. <br>";
    $r = ($tipo == "s")? $n1 + $n2 : $n1 * $n2;
    echo "O resultado da operação desejada é $r"
    ?>
</body>
</html>