<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"])? $_GET["t"]:"[Digite o texto desejado]";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"14pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"black";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
            
        }
    </style>
</head>
<body>
    <h1>Formulário</h1>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
    </div>
</body>
</html>