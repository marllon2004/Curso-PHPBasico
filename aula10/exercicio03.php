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
        $estado = isset($_GET["estado"])?$_GET["estado"]:"São Paulo";

        switch($estado){
            case "São Paulo":
            case "Minas Gerais":
            case "Rio de Janeiro":
            case "Espírito Santo":
                echo "<span class='foco'>Região Sudeste</span>";
                break;
            case "Amazonas":
            case "Acre":
            case "Roraima":
            case "Amapá":
            case "Rondônia":
            case "Pará":
            case "Tocantins":
                echo "<span class='foco'>Região Norte</span>";
                break;
            case "Maranhão":
            case "Piauí":
            case "Ceará":
            case "Rio Grande do Norte":
            case "Pernambuco":
            case "Paraíba":
            case "Alagoas":
            case "Sergipe":
            case "Bahia":
                echo "<span class='foco'>Região Nordeste</span>";
                break;
            case "Mato Grosso":
            case "Mato Grosso do Sul":
            case "Goiás":
            case "Distrito Federal":
                echo "<span class='foco'>Região Centro-Oeste</span>";
                break;
            case "Rio Grande do Sul":
            case "Santa Catarina":
            case "Paraná":
                echo "<span class='foco'>Região Sul</span>";
                break;
            default:
            echo "Estado Inválido!";
        }
        ?>
        <br/> <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>