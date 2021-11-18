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
        $contador = 1;
        while($contador <= 10){
            echo $contador. "</br>";
            $contador++;
        }
        ?>
        </br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>