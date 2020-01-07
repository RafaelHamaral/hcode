<?php

//array bi-dimensional

$carros[0][0] = "GM";//todos os carros que na primeira posicao for 0 sao carros da GM
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

/*quando o final do array for 0 esta falando de uma montadora,quando for diferente de zero esta falando do modelo desta 
montadora*/

$carros[1][0] = "Ford"; //todos os carros que na primeira posiçao for 1 sao carros da ford
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];

echo end($carros[1]);

//funcao end - saber a "ultima" posicao que eu tenho dentro do array


?>