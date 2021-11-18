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
        $ano = $_GET["ano"];
        $idade = 2021 - $ano;

        echo "Pessoa de $ano tem $idade anos <br/>";

        $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATORIO" : "NÃO OBRIGATÓRIO";

        echo "Seu voto é $tipo <br/>";
        ?>
    </div>
</body>
</html>