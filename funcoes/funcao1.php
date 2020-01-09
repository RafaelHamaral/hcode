<?php

function ola(){//toda funcao tem essa caracteristica de function(){}

    return "ola mundo! <br>";
}

echo ola(); //chamando a funcao (depois das chaves)
//sempre vai ser o nomefuncao(); 
$frase =  ola();

echo strlen($frase);

/*com o return a funcao nao mostrara na tela a menos que quando eu chamar
a funcao eu insira um echo, como esta acima

*Porque usar o return ao invez de por o echo direto na funcao?

R: Fazer um codigo cada vez mais inteligente, ou seja um codigo abstrato
um codigo que vai ser utilizado em varios lugares. Ou seja, neste caso eu 
eu quero mostrar a funcao, mas em determinado momento eu nao quero mostrar essa funcao
apenas quero que ela execute de outra forma. A funcao e a mesma mas neste caso eu uso
para determinada situacao
*/

?>