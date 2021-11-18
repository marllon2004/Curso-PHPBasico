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
        $numero = isset($_GET["numero"])?$_GET["numero"]:0;
        $operacao = isset($_GET["operacao"])?$_GET["operacao"]:1;

        switch($operacao){
            case 1:
                $resultado = $numero * 2;
                break;
            case 2:
                $resultado = pow($numero, 3);
                break;
            case 3:
                $resultado = sqrt($numero);
        }
        echo "O resultado da operação é <span class='foco'>$resultado</span>."
        ?>
        <br/><a href="exercicio01.html">Voltar</a>
    </div>
</body>
</html>