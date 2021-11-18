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

        if($idade < 16){
            $voto = "NÃO PODE VOTAR";
        }
        else if(($idade >= 16 && $idade < 18) || ($idade > 65)){
                $voto = "VOTO OPCIONAL";
        }
        else{
            $voto = "PODE VOTAR";
        }

        echo "Com $idade, $voto. ";
        ?>
    </div>
</body>
</html>