<?php

//aula 48 - classe abstrata

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}



abstract class Automovel implements Veiculo{// diferença entre abstrata e interface: nao so definimos 
    //o que os metodos devem ter como definimos o que eles fazem

    public function acelerar($velocidade){
    
        echo "O veiculo acelerou até ". $velocidade . "km/h"; 
    
    }

    public function frenar($velocidade){
    
        echo "O veiculo frenou até ". $velocidade . "km/h";
    
    }

    public function trocarMarcha($marcha){
    
        echo "O veiculo engatou a marcha ". $marcha;
    
    }
}

class DelRey extends Automovel { //diferença entre classe abstrata e uma classe comum: Um objeto
    //nunca vai instanciar uma classe abstrata, ou seja, ela precisa ser extendida por outra classe

    public function empurrar(){

    }

}//uma classe herda apenas de uma classe abstrata, mas uma classe pode implementar varias interfaces.

$carro = new DelRey(); //objeto

$carro->acelerar(200); 

?>
