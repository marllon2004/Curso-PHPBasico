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
        $txt = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos molestias quod dicta accusantium, temporibus, excepturi, veniam in impedit laboriosam ex enim delectus totam! Vitae possimus quae esse ratione, laborum cum.";
        $r = wordwrap($txt, 5, "<br/>\n", false);
        echo $r;
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>