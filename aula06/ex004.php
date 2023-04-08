<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis variantes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Variávies Variantes</h1>
    <?php
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável x é $x. <br>";
        echo "A variável criada recebeu o valor $abc.";
    ?>
</body>
</html>