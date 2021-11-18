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
        $frase = "Gosto de estudar Programação!!!";
        $novaFrase = str_replace("Programação", "PHP", $frase );
        echo $novaFrase;
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>