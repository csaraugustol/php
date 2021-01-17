<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <?php
        $idade = 70;
        $peso = 72.5;
    ?>
    <?php
        if($idade >= 16 && $idade <= 69 && $peso >= 50){
            echo "Atende aos requisitos.";
        }else{
            echo "Não atende aos requisitos.";
        }
    ?>
</body>
</html>