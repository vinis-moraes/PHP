<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Operadores</h1>
    <?php
    $preco = $_GET["p"];
    echo "O preço do produto é R$ ". number_format($preco, 2, ",", "."). "<br>";
    $preco += $preco*10/100;
    echo "E o novo preço com 10% de aumento será R$ ". number_format($preco, 2, ",", "."). "<br>";
    ?>
</body>
</html>