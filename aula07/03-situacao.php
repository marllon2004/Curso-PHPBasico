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
            $media = ($n1+$n2)/2;

            echo "A média das notas $n1 e $n2 é $media <br/>";

            echo "Aluno ".(($media < 6) ? "REPROVADO" : "APROVADO");
        ?>
    </div>
</body>
</html>