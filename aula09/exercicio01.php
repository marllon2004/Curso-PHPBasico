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
        $nasc = isset($_GET["nasc"])?$_GET["nasc"]:2000;
        $idade = date("Y") - $nasc;

        if($idade >= 18){
            $voto = "Pode votar";
            $dirigir = "Pode dirigir";
        }
        else{
            $voto = "Não pode votar";
            $dirigir = "Não pode dirigir";
        }

        echo "Com $idade você $voto e $dirigir. ";
        ?>
    </div>
</body>
</html>