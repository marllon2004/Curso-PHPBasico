<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Incremento PHP</title>
</head>
<body>
    <div>
        <?php
            $anoAtual = $_GET["anoAtual"]; // Pegar o ano na URl
            echo "O ano atual é $anoAtual";

            echo "<br/> O ano anterior é " .--$anoAtual;
        ?>
    </div>
</body>
</html>