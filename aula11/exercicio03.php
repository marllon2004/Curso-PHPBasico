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
        $inicio = $_GET["inicio"];
        $final = $_GET["final"];
        $incremento = $_GET["incremento"];

        if($inicio > $final){
            echo "<span class='foco'>VALOR INICIAL ($inicio) MAIOR QUE O VALOR FINAL ($final). PORTANTO, ORDEM DECRESCENTE.</span></br>";
            while($inicio >= $final){
                echo $inicio. "</br>";
                $inicio = $inicio - $incremento;
            }
        }
        else{
            while($inicio <= $final){
                echo $inicio. "</br>";
                $inicio = $inicio + $incremento;
            }
        }
        ?>
        </br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>