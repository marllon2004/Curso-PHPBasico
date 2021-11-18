<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP</title>
    <!-- CÓDIGO PHP - DECLARAÇÃO DE VARIAVEIS-->
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $media = ($n1 + $n2) / 2;
    ?>
    <!-- FIM CÓDIGO PHP - DECLARAÇÃO DE VARIAVEIS-->
    <style>
        span.red{
            color: red;
            font-size: 18pt;
        }
        span.blue{
            color: blue;
            font-size: 18pt;
        }
    </style>
</head>
<body>
    <div>
        <?php
        if($media >= 0 && $media < 5){
            $situacao = "REPROVADO";
        }
        else if($media >= 5 && $media < 7){
            $situacao = " de RECUPERAÇÃO";
        }
        else{
            $situacao = "APROVADO";
        }

        echo "As medias entre <span class='red'>$n1</span> e <span class='red'>$n2</span> é <span class='blue'>$media</span>. Com isso, aluno <span class='red'>$situacao</span>!";
        ?>
    </div>
</body>
</html>