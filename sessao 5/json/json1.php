<?php

$pessoas = array();

array_push($pessoas,array(
    'nome'=>'Joao',
    'idade'=>20
));

array_push($pessoas,array(
    'nome'=>'Glaucio',
    'idade'=>25
));

echo json_encode($pessoas);//tranformo o array em formato json


?>