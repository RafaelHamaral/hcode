<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status()); 

echo "<br>";

switch(session_status()){

/*apesar de retorar um numero inteiro o que sera retornado sao os valores abaixo, ou seja se for 2 ele mostrara o 2, mas 
entendendo que é PHP_SESSION_ACTIVE*/

    case PHP_SESSION_DISABLED: //0 
        echo "as sessões estão desabilitadas.";
break;
    case PHP_SESSION_NONE: //1
        echo "as sessões estão habilitadas, mas nenhuma foi iniciada";
break;
    case PHP_SESSION_ACTIVE: //2 
        echo "as sessões estão habilitadas e uma sessão iniciada";
break;

}

?>