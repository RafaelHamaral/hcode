<?php

$conn = new mysqli("localhost","root","root","dbphp7");//ip,usuario,senha,banco


//verificar erro de conexao
if ($conn->connect_error){

    echo "Error: ". $conn->connect_error; //acesssa o atributo para verificar erro

}

////CADASTRO DE VALORES

//fazer um insert 
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");//metodo prepare(oque vou preparar) 
//values (?, ?) - sera trocado pelos valores que serao enviados para o banco de dados


$stmt->bind_param("ss",$login, $pass);//metodo espera os tipos de dados das interrogações (abreviado, s string, i inteiro, b blob)
//neste caso sao duas strings (ss) e dois valores ($login e $pass(os dois sao string))

$login = "user";  
$pass = "12345";

$stmt->execute();//executa todo o codigo acima 

//a vantagem de usar o stmt é que eu nao preciso reescrever o codigo acima basta eu inserir as variaveis e executar novamente.
$login = "rafael";
$pass = "rastaman";

$stmt->execute();

?>