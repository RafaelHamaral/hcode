<?php

//recebo os dados (informo que tipo de dado vou receber e que irei receber N dados) - func_get_args();

function soma(int ...$valores){//todos os parametros sera um array e serao passados N valores


    return array_sum($valores);//funcao para soma dos valores
//minha funcao recebera N valores inteiros. 

//antes function soma($a + $b) -- nao é mais necessario

}

echo soma(2,2);
echo "<br>";
echo soma(10,30);
echo "<br>";
echo soma(1.5,4.2);//vai ignorar o ponto flutuante (5 e 2)

?>