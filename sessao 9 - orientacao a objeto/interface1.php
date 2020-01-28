<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

//interface obriga a voce a seguir exatamente o padrao criado conforme acima, a classe precisa ter os mesmos metodos criados. conforme abaixo


class Civic implements Veiculo{//essa classe implementa a interface veiculo

    public function acelerar($velocidade){
        echo "O veiculo acelerou até ". $velocidade . "km/h"; 
    }

    public function frenar($velocidade){//o nome da variavel nao precisa ser exatamente o mesmo, mas o metodo precisa
        echo "O veiculo frenou até ". $velocidade . "km/h";
    }

    public function trocarMarcha($marcha){//se eu quiser implementar varias é só por virgula (ex public function trocarMarcha,trocarPneu())
        echo "O veiculo engatou a marcha ". $marcha;
    }
}

$carro = new Civic(); 

$carro->trocarMarcha(1);//chamando a classe trocarMarcha, se um dos dados nao existir nao funciona o codigo

?>


<!-- erro apresentado se eu retirar algum atributo de alguma classe etc.. É obrigatorio declarar alguma variavel dentro do metodo  
Fatal error: Class Civic contains 1 abstract method and must therefore be declared abstract or implement the remaining methods
(Veiculo::frenar) in C:\xampp\htdocs\PHP\hcode\sessao 9 - orientacao a objeto\interface1.php on line 13