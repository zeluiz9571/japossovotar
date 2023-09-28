<?php
$numero1 = 25;
$numero2 = 5;
$numero3 = 5;

//Verifica se $numero1 é igual a $numero2
if ($numero1 == $numero2) {
    echo "Sim";
    echo "<br>";
} else {
    echo "Não";
    echo "<br>";
}

//Verifica se $numero1 é diferente de $numero2
if ($numero1 != $numero2) {
    echo "Sim";
    echo "<br>";
} else {
    echo "Não";
    echo "<br>";
}

//Verifica se $numero1 é Menor que $numero2
if ($numero1 < $numero2) {
    echo "Sim";
    echo "<br>";
} else {
    echo "Não";
    echo "<br>";
}

//Verifica se $numero3 é maior que $numero1
if ($numero3 > $numero1) {
    echo "Sim";
    echo "<br>";
} else {
    echo "Não";
    echo "<br>";
}

//Verifica se $numero1 é menor ou igual a $numero2
if ($numero1 <= $numero2) {
    echo "Sim";
    echo "<br>";
} else {
    echo "Não";
    echo "<br>";
}

//Verifica se $numero1 é maior ou igual a $numero2
if ($numero1 >= $numero2){
    echo "Sim";
    echo "<br>";
} else {
    echo "Não";
    echo "<br>";
}

//Verifica se $numero1 é idêntico a $numero2
if ($numero3 === $numero2) {
    echo "Sim";
    echo "<br>";
} else {
    echo "Não";
    echo "<br>";
}

//Verifica se $numero1 não é idêntico a $numero2
if ($numero1 !== $numero2) {
    echo "Sim";
    echo "<br>";
} else {
    echo "Não";
    echo "<br>";
}

/*Define o inteiro 1 como resultado da comparação, pois $numero1 é maior que $numero2*/
if ($numero1 <=> $numero2) {
    echo "Sim";
    echo "<br>";
} else {
    echo "Não";
    echo "<br>";
}

?>