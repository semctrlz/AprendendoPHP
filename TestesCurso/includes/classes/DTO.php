<?php

class DTOUsuario
{
    private $idusuario;
    private $usuario;
    private $senha;
    private $dataCadastro;
    private $email;
    private $sexo;
    private $ativo;
    private $dataNascimento;
    private $nome;
    private $DataCadastroFormatada;
    private $DataNascimentoFormatada;
    
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }
    public function getDataCadastroFormatada()
    {
        return $this->DataCadastroFormatada;
    }

    public function getDataNascimentoFormatada()
    {
        return $this->DataNascimentoFormatada;
    }

    public function setDataCadastroFormatada()
    {
        $this->DataCadastroFormatada = $this->getDataCadastro()->format("d/m/Y");
    }

    public function setDataNascimentoFormatada()
    {
        $this->DataNascimentoFormatada = $this->getDataNascimento()->format("d/m/Y");
    }

        public function getSenha()
    {
        return $this->senha;
    }

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    function __construct()
    {
        $this->setIdusuario(0);
        $this->setUsuario("");
        $this->setSenha("");
        $this->setEmail("");
        $this->setSexo("");
        $this->setAtivo("");
        $this->setNome("");
        $this->setDataNascimento(new DateTime());
        $this->setDataCadastro(new DateTime());
    }
    
}

class DTOConfirmEmail
{
    function __construct() {
        
    echo "DTOConfirmEmail";
    }
}