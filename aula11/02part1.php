<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <form method="get" action="02part2.php">
            <?php
            $contador = 1;
            while($contador <= 5){
                echo "Valor $contador: <input type='number' name='valor$contador' max='100' min='0' value='0'/></br>";
                $contador++;
            }
            ?>
            <input type="submit" value="Enviar"/>
            <a href="javascript:history.go(-1)">Voltar</a>
        </form>
    </div>
</body>
</html>