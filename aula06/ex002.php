<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Incremento</h1>
    <?php
    $atual = $_GET["anoa"];
    echo "O ano atual é $atual e o ano anterior é ". --$atual ;
    ?>
</body>
</html>