<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Switch</h1>
    <div>
        <?php
            if ($_GET["num"] != 0) {
                $n = $_GET["num"];
            } else {
                $n = 0;
            }
            $o = isset($_GET["oper"])?$_GET["oper"]:1;
            echo $o;
            switch ($o) {
                case 1:
                    $r = $num * 2;
                    break;
                
                case 2:
                    $r = pow($num, 3);
                    break;

                case 3:
                    $r = sqrt($num);
                    break;
            }
            echo $r
        ?>
    </div>
</body>
</html>