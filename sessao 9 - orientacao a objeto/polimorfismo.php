<?php

//aula 49 - Polimorfismo

abstract class Animal {

    public function falar(){

        return "som";
    }

    public function mover(){

        return "anda";

    }
}

class Cachorro extends Animal {

    public function falar(){

        return "late"; //mudou o comportamento do metodo falar (polimorfismo)

    }

}

class Gato extends Animal {

    public function falar(){

        return "mia";
    }
}

class Passaro extends Animal {

    public function falar(){

        return "canta";

    }

    public function mover(){ //$this acessar o objeto, o parent acessar a classe pai

        return "voa e " . parent::mover();//acessa estaticamente o metodo
//ou seja, alem de ele herdar o que é feito no metodo mover ele foi alterado para voar. acessou o metodo e inseriu mais um modo de agir
    }
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";


echo "------------------------<br/>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";


echo "------------------------<br/>";

$ave = new Passaro();

echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";



//grego - ter muitas formas

//Polimorfismo - metodos com mesmo nome em classes diferentes com o comportamento diferente

?>