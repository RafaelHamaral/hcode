<?php

//criando uma classe

class Pessoa{ //nome da classe (por convençao sempre em letra maiuscula)

    public $nome;//criando um atributo e infomando que ele pode ser acessado por todos (encapsulamento)

    public function falar(){ // metodo (funcao dentro de uma classe)

        return "O meu nome é ".$this->nome;//this representa a classe ja instanciada ($nome(objeto)) referenciar atributos e metodos
        ///dentro de outros metodos
    
    }
//public - tipo de recurso/quem podera ver (public todos tem acesso)
}

$glaucio = new Pessoa();//instacia(objeto) ou seja vou usar a classe Pessoa/quando nao se tem um metodo construtor os () sao opcionais
$glaucio->nome = "Glaucio Daniel"; //referencia um atributo $nome
echo $glaucio->falar();//invoco o metodo dentro da classe/ oque for retornado no metodo sera mostrado na tela




?>