<?php

spl_autoload_register(function($nameClass){

    var_dump($nameClass);

    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";//se refere a todo nome do arquivo inclusive a class...path

    if(file_exists($filename)){

        require_once($filename);


    }


})



?>