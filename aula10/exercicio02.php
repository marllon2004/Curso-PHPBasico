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
        $dia = isset($_GET["dia"])?$_GET["dia"]:0;

        switch ($dia){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Dia de Estudo!";
                break;
            case 7:
            case 8:
                echo "Dia de Descanso!";
                break;
            default:
            echo "Não existe esse dia da semana!";
        }
        ?>
        <br/> <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>