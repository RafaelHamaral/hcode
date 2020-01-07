<?php

//array bi-dimensional 2;

$pessoas = array();//infomo que a variavel $pessoas é um array;

array_push($pessoas,array(//funcao array_push - adiciona um item nesse array depois que o array esta criado.
//ou seja, dentro deste array ($pessoas) estou adicionando um outro array ($pessoas,array) que no caso eu inseri os dados da pessoa (nome e idade)
    'nome'=>'Joao',
    'idade'=>20
));

array_push($pessoas,array(
    'nome'=>'Glaucio',
    'idade'=>25
));

print_r($pessoas);

echo "<br>";

print_r($pessoas[0]['nome']);//chama na variavel pessoa o array na posicao 0 (primeiro array push), mostrando o nome (joao)




?>