<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo</title>
</head>
<body>
    <?php
       $nome = 'Cesar Augusto';
       $idade = 23;
       $peso = 72.5;
       $fumante = false;
    ?>
	<h1>Ficha de Cadastro</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante ?></p>
</body>
</html>
