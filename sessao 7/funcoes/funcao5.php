<?php
//Parametros por valor x por referencia

$a = 10;

//function trocaValor($a){
    function trocaValor(&$a){ // a variavel fora do escopo passa a ter o mesmo valor da variavel dentro do escopo

    $a += 50;//este $a nao é o mesmo $a fora do escopo (poderia ser outra variavel)

    return $a; 

}
echo trocaValor($a); //recebe o valor de $a + 50 que é o $a da funcao
echo "<br>";
echo $a; //mostrara 10 pois este $a esta fora do escopo da funcao
echo "<br>";
echo trocaValor($a);

//variavel é uma coisa, parametro de funcao é outra;

//passagem por valor: no servidor as variaveis sao alocadas em espaços de memorias diferentes
// passagem por referencia: o valor altera no espaco de memoria da variavel.





?>