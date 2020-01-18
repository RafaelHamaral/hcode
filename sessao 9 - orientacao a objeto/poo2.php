<?php


//atributos e metodos - getters e setters

class Carro
{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){ //chamando o atrubuto modelo

        return $this->modelo;
    }

    public function setModelo($modelo){ //vou definir valores 

        $this->modelo = $modelo; //esse $modelo é o parametro passado
        //neste caso atributo recebe o valor do parametro

    }

    public function getMotor():float{

        return $this->motor;
    }

    public function setMotor($motor){

        $this->motor = $motor;
    }

    public function getAno():int{//informo que este metodo é inteiro e quando eu retornar o dado sera inteiro e nao string

        return $this->ano;
    }

    public function setAno($ano){

        $this->ano = $ano; // nao precisa retornar, somente vai alterar o atributo se precisa retornar eu chamo o get deste metodo

    }
    // de um metodo eu acesso outros metodos

    public function exibir(){ //retornar um array com todas os atributos passados

        return array(

            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }
}

//definir valores para os metodos da class Carro 
$gol = new Carro();
//$gol->modelo = "Gol GT"; vai apresentar erro por que modelo é um atributo privado 
$gol->setModelo("Gol GT");//o metodo set é publico por isso nao vai apresentar erro
$gol->setMotor("1.6");
$gol->setAno("2020");

var_dump($gol->exibir());//var_dump mostra o tipo de dado/ print_r mostra o array criado