<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <pre>
        <?php
        $v = array( "nome"=> "Ana",
                    "idade"=> 23,
                    "peso"=> 65.5);
        foreach($v as $k=>$c){
            echo "O campo $k possui o conteúdo $c </br>";
        }
        ?>
        </pre>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>