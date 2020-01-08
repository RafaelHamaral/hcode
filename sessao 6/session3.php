<?php
//mostrando o id da minha sessao

require_once("config.php");

echo session_id(); //é uma funcao onde mostra o id
/*mesmo eu atualizando a pagina o id se mantem, caso eu entre em uma aba 
anonima o id vai mudar.*/

?>