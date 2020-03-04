<?php


class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    //quando eu estanciar a classe eu possa chamar todos
    //e nao precise utilizar muitos setters e getters

    public function __construct($a, $b, $c){ //nao tem que ser necessariamente o mesmo nome do atributo

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){//limpar da memoria/destroi da memoria (sempre sera a ultima coisa executada antes de liberar da memoria)
        //matar variaveis
        //desconetar do banco de dados
        //quando acaba o script da pagina

        var_dump("DESTRUIR");

    }

     public function __toString(){//transforma para string/serializa

        return $this->logradouro. ", ". $this->numero. ", ". $this->cidade;

     }


}

$meuendereco = new Endereco("Rua Cravinhos","160","Carapicuiba");

echo $meuendereco;

//var_dump($meuendereco);

//unset($meuendereco); 




?>