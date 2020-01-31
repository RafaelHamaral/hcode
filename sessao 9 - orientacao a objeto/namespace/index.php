<?php

require_once("config.php");

use Cliente\Cadastro; //usar o namespace - use

$cad = new Cadastro();

$cad->setNome("Rafael Holanda");
$cad->setEmail("rafael_holandamaral@hotmail.com");
$cad->setSenha("rafael1994");


$cad->registrarVenda();//método

?>