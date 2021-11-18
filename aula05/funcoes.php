<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Funções Aritméticas em PHP</title>
    <style>
        h2{
            font: 15pt Arial;
            color: #171559;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];

            echo "<h2>Valores Recebidos: $v1 e $v2</h2>";
            echo "Valor Absoluto de $v2:  " .abs($v2);
            echo "<br/> Valor de $v1<sup>$v2</sup>: " .pow($v1, $v2);
            echo "<br/> Raiz Quadrada de $v1: " .sqrt($v1);
            echo "<br/> Valor Arredondado de $v2: " .round($v2);
            echo "<br/> Inteiro de $v2: " .intval($v2);
            echo "<br/> Valor de $v1 em moeda: R$ " .number_format($v1, 2, ",", ".");
        ?>
    </div>
</body>
</html>