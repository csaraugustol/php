<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <?php
        /*echo date('d/m/Y H:i');
        echo date_default_timezone_get();*/
        echo date_default_timezone_set('America/Sao_Paulo');
        echo "<br>";
        echo date('d/m/Y H:i');
        echo date_default_timezone_get();
        echo "<br>";
     
        $data_inicial = '2021-01-01';
        $data_final = '2021-01-17';
        $time_inicial = strtotime($data_inicial);
        echo $data_inicial . ' - ' . $time_inicial;

        echo "<br>";

        $time_final = strtotime($data_final);
        echo $data_final . ' - ' . $time_final;
        $diferenca_times = abs($time_inicial - $time_final);

        echo "<br>";
        echo "<br>";
        
        echo 'A diferença de segundos entre data inicial e final é de: ' . $diferenca_times . 'm/s.';

        echo "<br>";

        $segundos_no_dia = 24 * 60 * 60;
        echo 'Um dia possui ' .$segundos_no_dia . ' segundos.';

        echo "<br>";

        $diferenca_dias = $diferenca_times / $segundos_no_dia;
        echo 'A diferença de dias entre as datas é de: ' . $diferenca_dias . ' dias.'



        
    ?>
</body>
</html>