<?php

$nome = "Rafael";

function teste(){  //o que esta dentro de {} é chamado de escopo
	
	global $nome; //estou dizendo que nome dentro da funcao e nome fora da funcao é a mesma variavel
	echo $nome;      

}

function teste2(){


	echo $nome. "agora no teste2";

}

//chamando a funcao
teste();  
teste2();


/* SEM O "GLOBAL" apresenta erro pois o php entende que $nome esta fora da funcao (estao em areas diferentes)

cada funcao nao interfere na outra, pois sao escopos diferentes


*/

?>