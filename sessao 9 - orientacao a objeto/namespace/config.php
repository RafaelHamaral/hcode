<?php

spl_autoload_register(function($nameClass){

    var_dump($nameClass);

    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";//se refere a todo nome do arquivo inclusive a sua pastas a class...path

    if(file_exists($filename)){ //se eu quiser comparar com true eu nao preciso colocar o == apenas deixo como esta.. 
//if(file_exists($filename)===true)  
        require_once($filename);


    }


})///directory_separator é a barra \, para cada so ele vai reconhecer 



?>