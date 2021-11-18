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
        $valor = isset($_GET["valor"])?$_GET["valor"]:1;
        $contador = $valor;
        $fatorial = 1;
        echo "O fatorial de $valor...";

        while($contador >= 1){
            $fatorial = $fatorial * $contador;
            $contador--;
        }
        echo "<br/><h2>$valor! = $fatorial</h2>"
        ?>
        </br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>