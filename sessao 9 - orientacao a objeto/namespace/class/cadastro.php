<?php


class Cadastro {//nome da classe igual ao nome do arquivo


private $nome;
private $email;
private $senha;

///getters e setters

public function getNome():string{

    return $this->nome; //this referencia o atributo dentro do metodo

}
public function getEmail():string{

    return $this->email;

}

public function getSenha():string{

    return $this->senha;

}
public function setNome($nome){

    $this->nome = $nome;

}
public function setEmail($email){

    $this->email = $email;

}

public function setSenha($senha){

    $this->senha = $senha;

}

public function __toString(){


    return json_encode(array(//json_encode tem que ser de uma array
        "nome"=>$this->getNome(),
        "email"=>$this->getEmail(),
        "senha"=>$this->getSenha()


    ));


}

}
