<?php

//Classes SQL responsáveis por todas as execuções de códigos no banco de dados
class Sql extends PDO {
    private $conn;
    public function __construct(){        
        $this->conn = new PDO("mysql:host=zwaredb.mysql.dbaas.com.br;dbname=zwaredb", "zwaredb", "shamboga2099");       
    }
    private function setParams($statement, $parameters = array()){
        foreach ($parameters as $key => $value) {
            
            $this->setParam($statement, $key, $value);
        }
    }
    private function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }
    public function query($rawQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }
    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->query($rawQuery, $params);        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

//DALUsuario - Todas as transações referentes ao usuário aparecem aqui
class DALUsuario
{
    //Retorna os dados do usuário através de ID
    function consultaPorId($ID)
    {
        $consulta = new Sql();
        
        $result = $consulta->select("SELECT IDUSUARIO, USUARIO, SENHA, EMAIL, SEXO, ATIVO, NOME, DATANASCIMENTO, DATACADASTRO FROM USUARIO WHERE IDUSUARIO = :ID", array(":ID"=>$ID));
        
        print_r($result);        
    }
        
    //Esta função retorna os dados do usuário correspondentes à combunação de usuário e senha. Retorna um objeto (se true) ou uma array (se false)
    function loga($usuario, $senha, $obj = bool){
        
        $consulta = new Sql();
        
        $senhaCripto = hash("whirlpool", $senha);
        
        $result = $consulta->select("SELECT IDUSUARIO, USUARIO, SENHA, EMAIL, SEXO, ATIVO, NOME, DATANASCIMENTO, DATACADASTRO FROM USUARIO WHERE USUARIO = :USUARIO AND SENHA = :SENHA", 
                array(":USUARIO"=>$usuario,
                      ":SENHA"=>$senhaCripto));
                 
        if($obj)
        {
        
            $retorno = $this->setData($result);
        
            return $retorno;
        }
            else
        {
                $retorno = $this->setArray($result);
                return $retorno;
        }
    }
    
    public function setData($data){
        
        $usuario = new DTOUsuario();
        
        if(count($data)>0)
        {
            $consulta = $data[0];
            
            $usuario->setIdusuario($consulta['IDUSUARIO']);
            $usuario->setUsuario($consulta['USUARIO']);
            $usuario->setSenha($consulta['SENHA']);
            $usuario->setEmail($consulta['EMAIL']);
            $usuario->setSexo($consulta['SEXO']);
            $usuario->setAtivo($consulta['ATIVO']);
            $usuario->setNome($consulta['NOME']);
            $usuario->setDataNascimento(new DateTime($consulta['DATANASCIMENTO']));
            $usuario->setDataCadastro(new DateTime($consulta['DATACADASTRO']));
            $usuario->setDataCadastroFormatada();
            $usuario->setDataNascimentoFormatada();
        }
        return $usuario;
    }
    
    public function setArray($data){
        
        $usuario = $this->setData($data);        
        
        $retorno = array( "IDUSUARIO" =>0,"USUARIO" =>"", "SENHA" =>"", "EMAIL" =>"", "SEXO" =>"", "ATIVO" =>"", "NOME" =>"", "DATANASCIMENTO" =>"", "DATACADASTRO" =>"");
                    
        $retorno["IDUSUARIO"] = $usuario->getIdusuario();
        $retorno["USUARIO"] = $usuario->getUsuario();
        $retorno["SENHA"] = $usuario->getSenha();
        $retorno["EMAIL"] = $usuario->getEmail();
        $retorno["SEXO"] = $usuario->getSexo();
        $retorno["ATIVO"] = $usuario->getAtivo();
        $retorno["NOME"] = $usuario->getNome();
        $retorno["DATANASCIMENTO"] = $usuario->getDataNascimentoFormatada();
        $retorno["DATACADASTRO"] = $usuario->getDataCadastroFormatada();       
        
        return $retorno;        
    }
}