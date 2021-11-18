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
        $i = 1;
        while($i <= 5){
            $valor = "num".$i;
            $url = "valor". $i;
            $$valor = isset($_GET[$url])?$_GET[$url]:0;
            $i++;
        }
        echo "$num1 $num2 $num3 $num4 $num5";
        /*while($i <= 5){
            $valor = "num".$i;
            echo "Valor $i:" .$$valor. "<br/>";
            $i++;
        }*/
        ?>
    </div>
</body>
</html>