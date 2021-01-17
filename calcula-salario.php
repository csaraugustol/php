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
        function calculaImposto($salario){
            if($salario <= 1903.98){
                return 'Isento.';
            }else if($salario >= 1903.99 && $salario >= 2826.65){
                return $salario * 0.075;
            }
            else if($salario >= 2826.66 && $salario >= 3751.05){
                return $salario * 0.15;
            }
            else if($salario >= 3751.06 && $salario >= 4664.68){
                return $salario * 0.225;
            }
            else{
                return $salario * 0.275;
            }
        }

        $resultado = calculaImposto(2000);

        echo "Imposto: " . $resultado;
    ?>
</body>
</html>