<?php

//Ex1
$nomes = ["Ana", "Bard", "Cralos", "Diogo", "Erique"];

for($cont =0; $cont < count($nomes); $cont++){
    echo $nomes[$cont].PHP_EOL;
}


//Ex2
$numero = [1, 2, 3, 4, 5];
$soma = 0;
$resultado = 0;

for($cont = 0; $cont < count($numero); $cont++){
    $soma += $numero[$cont];
}

$resultado = $soma / count($numero);

echo("Media é $resultado");


//Ex3
$Num1 = [1, 2, 3, 4];
$Num2 = [10, 20, 30, 40];
$soma = [];

for ($i = 0; $i < count($Num1); $i++) {
    $soma[] = $Num1[$i] + $Num2[$i];
}


echo json_encode($soma);


//Ex4
$aluno = [
    ["nome" => "Mario", "nota" => 8.0],
    ["nome" => "Paulo", "nota" => 6.1],
    ["nome" => "Amada", "nota" => 7.9]
];

echo $aluno[0]["nome"] . PHP_EOL;
echo $aluno[0]["nota"] . PHP_EOL;

echo $aluno[1]["nome"] . PHP_EOL;
echo $aluno[1]["nota"] . PHP_EOL;

echo $aluno[2]["nome"] . PHP_EOL;
echo $aluno[2]["nota"] . PHP_EOL;



