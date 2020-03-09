<?php

//PDO: Inserindo dados no Banco aula 58

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");//conexao com o banco mysql/a ordem nao importa, se usa-se o sql utilizaria
//da mesma forma de pdo2.php

//stmt significa comando
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)"); //:(dois pontos) 
//:LOGIN e :PASSWORD sao identificadores de deslogin, dessenha (parametros) e nao o valor real do campo.

//stmt prepare pode se enviar qualquer comando e nao apenas comandos basicos.
// O proprio mysql compila e ele mesmo executa o lot. 

////criando os parametros e unindo aos identificadores criados acima:

$login = "jose"; //passo o valor do parametro
$password = "1234";

$stmt->bindParam(":LOGIN",$login); //bindParam (unir os parametros)
$stmt->bindParam(":PASSWORD", $password);//ligue o identificador a variavel $password.

//bind = ligar o parametro com tal valor. Pra cada parametro um bindParam
//se o identificador tiver maiusculo tem que enviar maiusculo tbm


$stmt->execute();//executando o comando. 


echo "inserido ok";







?>