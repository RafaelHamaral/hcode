<?php

//aula 62 PDO-DAO (Data Acess Object)

//fazer a classe conversar com o banco

//nao se cria sempre essa classe basta criar uma vez 

class Sql extends PDO
{ //tudo o que a extensao PDO faz, a classe sql vai fazer - "metodos publicos" (PDO é nativo do php)

    private $conn;

    public function __construct() //construindo o objeto
    {
 //conectar no banco
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");
    }

    private function setParams($statment, $parameters = array())
    {//$parameters é um array por padrao

        foreach ($parameters as $key => $value) {

            $this->setParams($key, $value);
        }
    }

    private function setParam($statment, $key, $value)
    {

        $statment->bindParam($key, $value);
    }

    public function query($rawQuery, $params = array())
    {//rawQuery - query bruta (ira ser tratato posteriormente)

        $stmt = $this->conn->prepare($rawQuery); //stmt soh funciona neste metodo //tem acesso ao prepare porque eh class extendida

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;
    }

    public function select($rawQuery, $params = array()): array  //:array, declara o retorno da funcao
    {

        $stmt = $this->query($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);//no json vem soh os dados assosciativos. (evita sujar o front end do retorno.)
    }
}
