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
        function teste(&$x){
            $x += 2;
            echo "<p>O valor de X é $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>"
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>