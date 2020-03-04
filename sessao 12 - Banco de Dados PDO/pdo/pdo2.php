<?php


//CONECTANDO O PHP COM O SQL SERVER - AULA 57


$conn = new PDO("sqlsrv:Database=dbphp7;Server=localhost\SQLEXPRESS01;ConnectionPooling=0","sa","rafael1994"); //conexao para o sqlserver

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