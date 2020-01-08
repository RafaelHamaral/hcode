<?php

//session_start();//iniciei uma sessao

require_once("config.php");

//unset($_SESSION['nome']);//apago apenas o nome da varivael de sessao
//session_destroy();//sem parametros eu apago toda a sessao

echo $_SESSION['nome'];


/*

session_unset($_SESSION['nome']); ou unset($_SESSION()); eu limpo a variavel de sessao mas para o site
eu continuo sendo o mesmo usuário

session_destroy(); Eu limpo a variavel e tambem limpo o usuário do site, quando eu for 
recarregar a pagina uma nova sessao é iniciada;

*/



?>