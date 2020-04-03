<?php

// oque sera executado (primeira pagina no localhost)

/*require_once("config.php"); 

$sql = new Sql();//encontrar a classe sql

$usuarios = $sql->select("SELECT * FROM tb_usuarios");//se encontrar Sql vai executar esse metodos


echo json_encode($usuarios); //vai gerar todos os dados do banco em json*/

require_once("config.php");

//carrega um usuário:
/*$root = new Usuario();
$root->loadById(6); //como eh um objeto vai gerar o __toString() e mostrar o json
echo $root;*/

//////////////////////////////////////////////////////////////////////

//carrega uma lista de usuários:

/*$lista = Usuario::getList();
echo json_encode($lista);*/

///////////////////////////////////////////////////////////////////////

//carrega uma lista de usuarios buscando pelo login:

/*$search = Usuario::search("jo");

echo json_encode($search);*/

////////////////////////////////////////////////////////////////////////

//carrega um usuario usando o login e a senha:

$usuario = new Usuario();
$usuario->login("root","123");

echo $usuario;


?>