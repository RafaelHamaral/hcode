<?php

namespace cliente;

class Cadastro extends \Cadastro{//// \ -> volte na raiz   \Cadastro -> la na raiz encontre a classe cadastro

    public function registrarVenda(){
 
        echo "Foi registrada uma venda para o cliente ".$this->getNome();

    }



}


?>