<?php

//parametros de funcoes

//function ola($texto){
  
    // function ola($texto = "mundo", $periodo = "bom dia"){//neste caso estou definindo um valor padrao
   
        //function ola($texto,$periodo = "bom dia"){//desta maneira o parametro $texto passa a ser obrigatorio a ser passado
   
            function ola($texto = "mundo", $periodo){//neste caso $periodo passa a ser obrigatorio mas fica sem sentido por que sempre vou ter que informar o primeiro parametro e sempre vai dar erro faltando o segundo parametro
   
                return "Ola $texto! $periodo <br>";
}

//echo ola(); //como o valor foi passado por padrao ()vazio ira mostrar o valor do parametro ("mundo")

echo ola("Glaucio","boa noite");

echo ola("joao","beleza");//Ola Joao, Bom dia

echo ola("","");//desta maneira retorna vazio.

echo ola ("","");//retorna Ola! Bom dia.

echo ola("Rafael","");

//parametro obrigatorio
echo ola("mundo","estou bem");//parametro obrigatorio, caso esteja sem parametro vai mostar erro informando que falta o argumento

//se $texto nao tiver o valor padrao quando eu for inserir a funcao eu sou obrigado a inserir o $texto no parametro

//** Regra: Os valores definidos como obrigatorios (sem parametros) SEMPRE deverao ficar a esquerda. */




/////NOTA: corrigi os valores entao todos vao funcionar, para voltar ao erro eu retiro o segundo parametro conforme a function 

?>