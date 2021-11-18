<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
            $n1 = 3;
            $n2 = "3";
            $r = ($n1 === $n2) ? "SIM" : "NÃO";

            echo "Variaveis são identicas? <br/>";
            echo "Resposta: $r <br/>";
        ?>
    </div>
</body>
</html>