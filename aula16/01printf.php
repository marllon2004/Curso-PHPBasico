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
        $produto = "Leite";
        $preco = 4.5;
        // echo "O $produto custa R$ " .number_format($preco, 2);
        printf ("O %s custa R$ %.2f", $produto, $preco);
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>