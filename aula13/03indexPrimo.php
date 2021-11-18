<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <form method="get" action="03primo.php">
            <select name="numero">
                <?php
                for($i = 1; $i <= 50; $i++){
                    echo "<option>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="Primo?">
        </form>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>