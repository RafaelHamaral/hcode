<?php

    class Documento { //exemplo de uma classe generica (todo documento tem um numero)

            //getters e setters
        
            private $numero;

        public function getNumero(){

            return $this->numero;
        }

        public function setNumero($n){

            $this->numero = $n;
        }

    }

    class CPF extends Documento{ //herança 

        public function validar():bool{

            $numeroCPF = $this->getNumero(); //aqui acesso o numero

            //validação do cpf - aqui posso inserir a validaçao da ultima aula
            return true;

        }      //a classe filha acessa atributos da classe pai, mas a classe pai nao acessa atributos da classe filha
    }

    $doc = new CPF();

    $doc->setNumero("1234424344-44");

    var_dump($doc->validar());

    echo "<br>";

    echo $doc->getNumero();

?>