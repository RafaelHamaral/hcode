<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","root" ); //dsn - data source name (padrao de conexao com o banco)
//informa o tipo do banco e o nome do banco, o servidor(ip,localhost), depois informa o usuário e senha.


$stmt = $conn->prepare("SELECT*FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();//enviar para o banco de dados

$results = $stmt->fetchall(PDO::FETCH_ASSOC); //fetchall - "fatiar" todas as linhas (trazendo o associativo do PDO)

// posso simplesmente enviar um json etc usando o json_encode. (diminuia o codigo)


//caso eu queira navegar

foreach($results as $row){

    foreach($row as $key =>$value){//$key nome da colua, $value valor da coluna

        echo "<strong>" . $key . ": </strong>" . $value . "<br/>";
    }

echo "================================================<br>";

}

//var_dump($results);