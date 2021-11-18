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
        function soma(){
            $p = func_get_args();
            $total = func_num_args();
            $soma = 0;

            for($i = 0; $i < $total; $i++){
                $soma += $p[$i];
            }
            return $soma;
        }

        $resultado = soma(3, 5, 2, 8, 9, 4);

        echo "O resultado da soma é $resultado";
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>