<?php
/*
if(1 > 10){
    echo "É maior";
}else{
    echo "É menor";
}


/*for($i = 0; $i < 20; $i++){
    $b = $i + 1;

    $a = pow ( $b, 2 );
    
    echo "Quadrado de {$b} é {$a}";
    echo "<br>";
}

for($i = 0; $i < 20; $i++){
    $a = $i * $i;

    echo "Quadrado de" . $i .  " é " . $a;
    echo "<br>";
}*/

$a = "Cesar";
$b = "Augusto";
$c = "$a $b";

echo "$c";

echo "<br>";
echo"<hr>";

echo "<p><font size=\"12\" color=\"blue\"> $c </font></p>";

echo "<br>";
echo"<hr>";

$nome1 = "Zezim";
$cidade1 = "Juiz de Fora";
$nome2 = "Pedrim";
$cidade2 = "Juiz de Fora";

if($cidade1 == $cidade2){
    echo "Todos os alunos são da mesma cidade: $cidade1";
}else{
    echo "Os alunos são de cidades difentes: $cidade1 e $cidade2";
}

?>