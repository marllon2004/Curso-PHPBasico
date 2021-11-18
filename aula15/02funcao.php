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
        include "funcoes.php";

        echo "<h1>testando novas funções</h1>";

        ola();
        mostraValor(4);
        
        echo "<h2>Finalizando o Programa...</h2>"
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>