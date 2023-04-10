<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média escolar</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
     <h1>Média escolar</h1>
     <div>
        <?php
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            
            $media = ($n1 + $n2) / 2;
            echo "A média foi $media <br>";
            if ($media > 7) {
                echo "Aprovado";
            } elseif ($media >= 5) {
                echo "Recuperação";
            } else {
                echo "Reprovado";
            }
            
        ?>
     </div>
</body>
</html>