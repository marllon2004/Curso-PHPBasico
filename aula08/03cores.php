<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP</title>

    <!--  CÓDIGO PHP - DECLARAÇÃO DE VARIAVEIS-->
    <?php
    $texto = isset($_GET["texto"])?$_GET["texto"]:"[sem texto]";
    $tamanho = isset($_GET["tamanho"])?$_GET["tamanho"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <!-- FIM CÓDIGO PHP - DECLARAÇÃO DE VARIAVEIS-->
    
    <style>
        span.texto{
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
        echo "<span class='texto'>$texto</span>";
        ?>
    </div>
</body>
</html>