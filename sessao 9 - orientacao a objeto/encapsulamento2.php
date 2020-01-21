<?php


class Pessoa{


    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";


    public function verDados(){//estando na mesma classe enxegar oque é protegido,publico ou privado

        echo $this->nome . "</br>";
        echo $this->idade . "</br>";
        echo $this->senha . "</br>"; 
    }

}


class Programador extends Pessoa{//a classe programador vai extender tudo da classe pessoa exceto o que for privado

    public function verDados(){//estando na mesma classe enxegar oque é protegido,publico ou privado

        echo get_class($this) . "<br/>";//esta chamando de qual classe? //get_class espera um objeto

        echo $this->nome . "</br>";//publico
        echo $this->idade . "</br>";//protegido
        echo $this->senha . "</br>"; //privado - senha nao tera acesso por que ele é privado
    }


}

$obj = new Programador();//senha nao mostrara por que senha é privado ou seja a classe q extende nao  funciona

//$obj = new Pessoa();


//echo $obj->nome . "<br/>";//publico - aparece independente de onde eu acesso

//echo $obj->idade . "<br/>";//só quem estiver dentro da classe (os metodos) ou quem herda consegue acessar.
//objeto nao consegue acessar

//echo $obj->senha . "<br/>";//No privado nem mesmo as classes herdeiras conseguem acessar, só a propria classe.

$obj->verDados();//chamei o metodo que é publico, todos os dados aparecem

?>