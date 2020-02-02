 <?php
//registar mais de uma funcao com mais funcoes de autoload
//arquivos que esta em outra pasta

function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse.".php") === true){//verficiar se o arquivo existe(retorna booleano) - file_exists

        require_once($nomeClasse.".php");
    }

}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){//incluir classe abstrata 

    if(file_exists("Abstratas" .  DIRECTORY_SEPARATOR . $nomeClasse.".php")===true){//Directory_Separator (colocar a barra invertida) utilizaçao de linux
        require_once("Abstratas" .  DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }//directory_separator: separador de diretorio \windows /linux

}); //*Abstratas é o nome da classe. 

$carro = new DelRey();

$carro->acelerar(100);




?>