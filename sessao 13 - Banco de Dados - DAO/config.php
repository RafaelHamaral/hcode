<?php

//sabe como encontrar os amigos da classe

spl_autoload_register(function($class_name){

    $filename = $class_name. ".php";

    if (file_exists(($filename))){

        require_once($filename); //se o arquivo ja existir faz o require dele

    }



});

?>