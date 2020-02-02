<?php


///VER OS DADOS NA TELA
$conn = new mysqli("localhost","root","root","dbphp7");//ip,usuario,senha,banco


//verificar erro de conexao
if ($conn->connect_error){

    echo "Error: ". $conn->connect_error; //acesssa o atributo para verificar erro

}

$result = $conn->query("SELECT*FROM tb_usuarios ORDER BY deslogin");

$data = array();//converter pra json


while($row = $result->fetch_array(MYSQLI_ASSOC)) {


    //convertendo pra json    
    array_push($data, $row);//adicione um novo item no array $data e adciona o $row.


//var_dump($row);

}

echo json_encode($data); //gerar json a partir do banco de dados.

//consumir api etc....



//enquanto fetch_array tiver resultado traga os dados e armazene em $row

//array vazio no php equivale a false    

//posso usar o mysql_assoc sem o fetch_array (mysqli_assoc (nao mostra o indice do array))
 

?>


