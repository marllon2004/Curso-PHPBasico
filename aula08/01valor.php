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
        $valor = $_GET["valor"];
        $raiz = sqrt($valor);
        echo "A raiz quadrada de $valor é " .number_format($raiz, 2);
        ?>
        <br/><a href="01exercicio.html">Página anterior</a>
        <br/><a href="../aula08/">Voltar para pasta inicial</a>
    </div>
</body>
</html>