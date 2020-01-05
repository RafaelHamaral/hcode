<?php

//include "aula1 - include.php"; // funciona mesmo se o arquivo nao estiver funcionando corretamente ou nao existir

require "aula1 - include.php"; // só funciona se o arquivo existir e estiver funcionando corretamente. 

$resultado = somar(10, 90);

echo $resultado;

//ou seja, ele copia o arquivo criado (aula1..) e insere neste arquivo entao onde esta o include é como se estivesse a funçao escrita no arquivo aula1...

//require - obriga que o arquivo exista e que o arquivo esteja funcionando corretamente, caso nao esteja funcionando ou nao exista o require para e informa um erro fatal.

//include - tenta funcionar mesmo que o arquivo nao esteja funcionando corretamente ou que nao exista, alem do include ter mais recursos - ex.: include path que é configurado no php.ini (mapeada no meu SO)


//include remoto (é perigoso)- permite que o include traga arquivos de um site (outro dominio). outro perigo é trazer parametros externos (_GET etc) -- desta maneira nao é uma boa pratica

?> 