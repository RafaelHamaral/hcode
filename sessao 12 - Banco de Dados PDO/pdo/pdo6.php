<?php

//PDO: Usando Transações - aula 61

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");

//a transação esta amarrada a variavel da conexao e nao ao stmt

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?"); // ? a primeira interrogacao sera o primeiro identificador do array($id).

$id = 3; 

$stmt->execute(array($id));//esse dado é a primeira interrogacao acima ou seja se tivessem dois dados teriam que ter duas ? ? 

echo "deletado <br/>";

//$conn->rollback(); //cancela a transação ou seja tem que manter os dados
$conn->commit(); // confirma a transação os dados serao deletados

echo "Transação executada corretamente.";
