<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Formulários</h1>
    <div>
        <?php
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "O valor envido foi $valor.<br>";
            echo "A raíz quadrada de $valor é ".number_format($rq, 2, ",", ".") . "!"
        ?>
        
    </div>
    <br>
    <a href="ex009.html">Voltar para Início</a>
</body>
</html>