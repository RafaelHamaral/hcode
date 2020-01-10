<?php

//retorno de dados : 

function soma(int ...$valores):float{//:float sera o tipo do retorno (float)
//recebe um numero inteiro e retorna uma string ou outro dado, ou seja ele faz uma conversao do tipo de dado (cast)
    return array_sum($valores); 

}

echo var_dump(soma(2,2));
echo "<br>";

echo soma(10,30);
echo "<br>";

echo var_dump(soma(1.5,4.2));//vai ignorar o ponto flutuante (5 e 2)

?>