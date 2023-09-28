<?php
$booleano1 = true;
$booleano2 = false;
$booleano3 = true;

if ($booleano1 and $booleano2) {
    echo "V - Verdadeiro";
    echo "<br>";
} else {
    //Resultado é falso pois os valores das variáveis são diferentes
    echo "F - Falso";
    echo "<br>";
}

if ($booleano1 or $booleano2) {
    //Resultado é vredadeiro pois uma das variáveis é verdadeira 
    echo "V - Verdadeiro";
    echo "<br>";
} else {
    echo "F - Falso";
    echo "<br>";
}

if ($booleano1 xor $booleano3) {
    echo "V - Verdadeiro";
    echo "<br>";
} else {
    //Resultado é falso pois os valores de ambas as variáveis são verdadeiras
    echo "F - Falso";
    echo "<br>";
}

if (!$booleano2) {
    //Resultado é verdadeiro pois o valor da variável é falso
    echo "V - Verdadeiro";
    echo "<br>";
} else {
    echo "F - Falso";
    echo "<br>";
}

if ($booleano1 && $booleano3) {
    //Resultado é verdadeiro ambos os valores das variáveis são verdadeiros
    echo "V - Verdadeiro";
    echo "<br>";
} else {
    echo "F - Falso";
    echo "<br>";
}

if (!$booleano1 || !$booleano3) {
    echo "V - Verdadeiro";
    echo "<br>";
} else {
    //Resultado é falso, pois o valor de ambas as variáveis foram invertidas para falso
    echo "F - Falso";
    echo "<br>";
} 

?>