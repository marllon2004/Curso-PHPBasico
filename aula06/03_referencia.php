<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Referencia PHP</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = &$a;
            $b += 5;
            echo "Variável A: $a";
            echo "<br/>Variável B: $b";
        ?>
    </div>
</body>
</html>