<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Variável da Variável</title>
</head>
<body>
    <div>
        <?php
            $x = "abc";
            $$x = "def";
            echo "Conteúdo da variável X é $x";
            echo "<br/> A variável criada é $abc";
        ?>
    </div>
</body>
</html>