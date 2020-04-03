<?php

class Usuario
{

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    //getters and setters

    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function setIdusuario($value)
    {
        $this->idusuario = $value;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($value)
    {
        $this->deslogin = $value;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($value)
    {
        $this->dessenha = $value;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($value)
    {  
        $this->dtcadastro = $value;
    }
///loadbyId metodo que traz um usuário de determidado id.

    public function loadById($id) {
    $sql = new Sql();

    $results = $sql->select("SELECT * FROM tb_usuarios where idusuario = :ID", array( 
        ":ID"=>$id //$parameters as $key => $value
    ));
    //fazendo uma validacao pra ver se o informado no metodo existe
    //results no indice 0 do array
    //faz a verificacao para retornar dados existente do banco
      
        if(count($results) > 0){ //posso usar o isset 

            $row = $results[0];  

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }
    }

    //metodo para carregar lista
    public static function getList(){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

//metodo para carregar determinado usuario que contem determinada expressao.
    public static function search($login){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios where deslogin like :SEARCH ORDER BY deslogin", array(':SEARCH' =>"%".$login."%"));
    }

//metodo para obter os dados do usuario autenticado: (com autenticacao dos getters e setters)

    public function login($login, $password){

            $sql = new Sql();
        
            $results = $sql->select("SELECT * FROM tb_usuarios where deslogin = :LOGIN AND dessenha = :PASSWORD", array( 
                ":LOGIN"=>$login, 
                ":PASSWORD" =>$password
            ));
        
            
                if(count($results) > 0){ 

                    $row = $results[0];  
        
                    $this->setIdusuario($row['idusuario']);
                    $this->setDeslogin($row['deslogin']);
                    $this->setDessenha($row['dessenha']);
                    $this->setDtcadastro(new DateTime($row['dtcadastro']));

                } else {

                throw new Exception("Login e/ou Senha invalido");

            }
    }

    public function __toString(){ //__toString converte os dados em string possibiitando gerar o json com os dados
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
}
