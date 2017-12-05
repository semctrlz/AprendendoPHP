<?php

//Encapsulando os dados do usuário

class Usuario
{
	private $id;
	private $nome;
	private $login;
	private $senha;
	private $sexo;
	private $email;
	private $ativo;
	private $dataNascimento;
	private $dataCadastro;

	function __construct(argument)
	{
		//Deixa padrão a data atual
		SetDataCadastro(date());
	}

	public function GetId(){
		return $this->id;
	}

	public function GetNome(){
		return $this->nome;
	}

	public function GetGetLogin(){
		return $this->login;
	}

	public function GetSenha(){
		return $this->senha;
	}

	public function GetSexo(){
		return $this->sexo;
	}

	public function GetEmail(){
		return $this->email;
	}

	public function GetAtivo(){
		return $this->ativo;
	}

	public function GetDataNascimento(){
		return $this->dataNascimento;
	}

	public function GetDataCadastro(){
		return $this->dataCadastro;
	}

	public function SetId($valor){
	$this->id = $valor;
	}

	public function SetNome($valor){
		$this->nome = $valor;
	}

	public function SetSetLogin($valor){
		$this->login = $valor;
	}

	public function SetSenha($valor){
		$this->senha = $valor;
	}

	public function SetSexo($valor){
		$this->sexo = $valor;
	}

	public function SetEmail($valor){
		$this->email = $valor;
	}

	public function SetAtivo($valor){
		$this->ativo = $valor;
	}

	public function SetDataNascimento($valor){
		$this->dataNascimento = $valor;
	}

	public function SetDataCadastro($valor){
		$this->dataCadastro = $valor;
	}
}


?>