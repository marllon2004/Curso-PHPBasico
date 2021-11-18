<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operações Aritméticas</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $media = ($n1 + $n2) / 2;

            echo "<h2>Valores Recebidos: $n1 e $n2 </h2>";
            echo "<br/>Soma: " .($n1 + $n2);
            echo "<br/> Subtração: " .($n1 - $n2);
            echo "<br/> Multiplicação: " .($n1 * $n2);
            echo "<br/> Divisão: " .($n1 / $n2);
            echo "<br/> Módulo: " .($n1 % $n2);
            echo "<br/> Média: $media";
        ?>
    </div>
</body>
</html>