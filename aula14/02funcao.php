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
            return $a + $b;
        }

        $x = 3;
        $y = 4;

        $resultado = soma($x, $y);

        echo "A soma entre $x e $y é $resultado";
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>