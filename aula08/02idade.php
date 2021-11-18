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
        $nome = isset($_GET["nome"])?$_GET["nome"]: "[não encontrado]";
        $nasc = isset($_GET["nasc"])?$_GET["nasc"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]: "[sem sexo]";
        $idade = date("Y") - $nasc;

        echo "$nome é $sexo e tem $idade anos!"
        ?>
        <br/><a href="02exercicio.html">Voltar</a>
    </div>
</body>
</html>