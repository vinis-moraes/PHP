<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referência</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Referência</h1>
    <?php
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variável A vale $a. <br>";
    echo "A variável B vale $b."
    ?>
</body>
</html>