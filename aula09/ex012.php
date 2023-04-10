<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Condições</h1>
    <div>
        <?php
            if ($_GET["ano"] != 0) {
                $ano = $_GET["ano"];
            } else {
                $ano = 2000;
            }
            $idade = date("Y") - $ano;
            echo "Você nasceu em $ano e terá $idade anos <br>";

            if ($idade >= 18) {
                $voto = "Já pode votar";
                $dirigir = "Já pode dirigir";
            } else {
                $voto = "Não pode votar";
                $dirigir = "Não pode dirigir";
            }
            echo "$voto <br> $dirigir"
        ?>
    </div>
</body>
</html>