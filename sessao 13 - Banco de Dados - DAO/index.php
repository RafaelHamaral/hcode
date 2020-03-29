<?php

// oque sera executado (primeira pagina no localhost)

require_once("config.php");

$sql = new Sql();//encontrar a classe sql

$usuarios = $sql->select("SELECT * FROM tb_usuarios");//se encontrar Sql vai executar esse metodos


echo json_encode($usuarios);

?>