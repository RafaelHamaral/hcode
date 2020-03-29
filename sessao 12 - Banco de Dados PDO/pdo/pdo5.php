<?php 

//PDO: Apagando dados no banco - aula 60

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID"); //deletando os dados pelo id

$id = 1; // dados do id que seram deletados


$stmt->bindParam(":ID",$id); //ligo o identificador ID a variavel id.

$stmt->execute(); 

echo "dados deletados com sucesso";