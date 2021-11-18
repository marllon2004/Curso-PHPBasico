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
        $contador = 10;

        while($contador >= 1){
            echo $contador. "</br>"; 
            $contador--;
        }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>