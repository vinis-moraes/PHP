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

            if ($idade < 16) {
                $voto = "Não vota";
            } elseif (($idade < 18) || ($idade > 65))  {
                    $voto = "Voto opcional";
            } else {
                    $voto = "Voto obrigatório";
            }
            
            echo "$voto <br>"
        ?>
    </div>
</body>
</html>