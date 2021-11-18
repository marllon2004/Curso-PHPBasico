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
        function soma($a, $b){
            $s = $a + $b;
            echo "<p>A soma é $s</p>";
        }

        soma(10, 15);
        soma(8, 2);
        $x = 9;
        $y = 15;
        soma($x, $y);
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>