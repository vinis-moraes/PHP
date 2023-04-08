<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 é ". abs($v2). "<br>";
    echo "O valor de $v1 <sup>($v2)</sup> é ". pow($v1, abs($v2)). "<br>";
    echo "A raíz quadrada de $v1 é ". sqrt($v1). "<br>";
    echo "O valor de $v2 arredondado é ". round($v2). "<br>";
    echo "A parte inteira de $v2 é ". intval($v2). "<br>";
    echo "O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".");
    ?>
</body>
</html>