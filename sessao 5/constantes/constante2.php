<?php

//define - crio a constante
//por padrao a constante vai ser em letra maiuscula
//primeiro crio o nome da constante e depois passo os parametros (arrays)
define("BANCO_DE_DADOS",[
    '127.0.0.1',
    'root',
    'password',
    'teste'
], true);//caso eu queira definir minha constante como case insesitive eu passo o parametro true, caso contrario deixo sem parametro
//],true); nao é comum usar a constante como casa insensitive (nao eh uma boa pratica);
print_r(BANCO_DE_DADOS);

?>