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

        echo "TABUADA DO NÚMERO $numero";

        for($c =1; $c <= 10; $c++){
            $tabuada = $numero * $c;
            echo "<br/> $numero X $c = $tabuada";
        }
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>