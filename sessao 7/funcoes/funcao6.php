<?php

$pessoa = array(
    'nome'=>'Joao',
    'idade'=>20
);

foreach($pessoa as &$value){//o valor dentro do array estou passando por referencia

    if(gettype($value)==='integer')$value +=10;//o tipo do valor for inteiro $value recebe $value + 10
    //gettype - retorna o tipo de dado da variavel

//com o & o valor dentro do array é 30 (20 + 10), se tirar o & o valor final é 30 mas o valor no array é 20 pois nao sera alterado. 


    echo $value."<br>";

}

print_r($pessoa);

?>