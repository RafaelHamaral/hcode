<?php

class Documento{


    private $numero;

    public function getNumero(){

        return $this->numero;

    }

    public function setNumero($numero){

       $resultado = Documento::validarCPF($numero);   //nome da classe :: acessar metodos estaticos
       
       if($resultado === false){

        throw new Exception("CPF Informado não é valido",1);// se o cpf nao for valido mostrara essa mensagem

       }
       
       $this->numero = $numero;

    }


    /*criando um metodo estatico - static (permite que tanto um atributo quanto um metodo
    possam ser chamados(acessados)sem que eu crie uma representação "daquela" classe ou crie um objeto)*/

    public static function validarCPF($cpf):bool{

        //verifica se um numero foi informado - se variavel vazia (empty) retorna falso
        if(empty($cpf)) {
            return false;
        }
     
       // elimina possivel mascara 
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0; //verifica se a expressao contem numeros de 0 a 9 se sim valida o cpf se nao mostra 0
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT); 
         
        //verifica se o numero das sequencias invalidas abaixo
        //foi digitado - caso afirmativo - retorna falso
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }//se nao tiver 11 digitos ja retorna falso se nao se os numeros forem igual a sequencia abaixo retorna falso
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
         // Calcula os digitos verificadores para verificar se o
         //cpf é valido - se sim retorna verdadeiro 
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
     
            return true;
        }

    }

}
/* usar instanciando a classe.
$cpf = new Documento();
$cpf->setNumero("29404073040");

var_dump($cpf->getNumero());
*/

//usar sem instaciar a classe 
var_dump(Documento::validarCPF("29404073040")); //neste caso se for verdadeiro retorna true se nao falso.

?>