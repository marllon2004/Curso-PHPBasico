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
        $numero = isset($_GET["numero"])?$_GET["numero"]:1;
        $divisores = 0;

        echo "Analisando o número $numero... <br/>";
        echo "Valores múltiplos: ";
        for($c = 1; $c <= $numero; $c++){
            $resto = $numero % $c;

            if($resto == 0){
                echo "$c ";
                $divisores++;
            } 
        }
        echo "<br/>Total de divisores: $divisores <br/>";
        if($divisores == 2){
            echo "<span class='foco'>É primo!</span>";
        } else{
            echo "<span class='foco'>Não é primo!</span>";
        }
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>