<?php


class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    //quando eu estanciar a classe eu possa chamar todos
    //e nao precise utilizar muitos setters e getters

    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){//limpar da memoria/destroi da memoria (sempre sera a ultima coisa executada antes de liberar da memoria)
        
        var_dump("DESTRUIR");

    }

     public function __toString(){//transforma para string

        return $this->logradouro. ", ". $this->numero. ", ". $this->cidade;

     }


}

$meuendereco = new Endereco("Rua Cravinhos","160","Carapicuiba");

echo $meuendereco;

//var_dump($meuendereco);

//unset($meuendereco); 




?>