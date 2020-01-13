<?php
//funcao anonima


function teste($callback){

    //Processo Lento

    $callback();//funcao anonima


}

teste(function(){//chamando a funcao anonima

    echo "Terminou";


});


?>