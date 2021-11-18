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
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $tipo = $_GET["opcao"];

            echo "Os valores informados são $n1 e $n2 <br/>";

            $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;

            echo "Resultado é: $r";
        ?>
    </div>
</body>
</html>