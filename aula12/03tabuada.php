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
        $numero = isset($_GET["numero"])?$_GET["numero"]:1;
        $contador = 1;

        echo "TABUADA DO $numero </br>";

        while(10 >= $contador){
            $tabuada = $numero * $contador;

            echo "$numero X $contador = $tabuada </br>";

            $contador++;
        }
        ?>
        </br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>