<?php 

//PDO: Alterando dados no banco - aula 59

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID"); //atualizando os dados pelo id

$login = "joao";
$password = "qwerasdf";
$id = 4; //insiro o id para que eu faça a atualização do dado

$stmt->bindParam(":LOGIN",$login); 
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID",$id); //ligo o identificador ID a variavel id.

$stmt->execute();

echo "dados alterados com sucesso";