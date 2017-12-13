<?php

//Encapsulando os dados do usuário

public class Usuario
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

	function __construct()
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

public class Telefone
{
	private $idT;
	private $tipo;
	private $numero;
	private $idUsuario;

	public function GetId(){
		return $this->id;
	}

	public function GetTipo(){
		return $this->tipo;
	}

	public function GetNumero(){
		return $this->numero;
	}

	public function GetIdUsuario(){
		return $this->idUsuario;
	}

	public function SetId($valor){
	$this->id = $valor;
	}

	public function SetTipo($valor){
	$this->tipo = $valor;
	}

	public function SetIdNumero($valor){
	$this->numero = $valor;
	}

	public function SetIdIdUsuario($valor){
	$this->idUsuario = $valor;
	}
}

public class EmailConfirmacao
{
	private $idEmailConfirmacao;
	private $codigo;
	private $dataCriacao;
	private $emailConfirmacao;
	private $status;
	private $validade;
	private $idUsuario;

	function GetIdEmailConfirmacao()
	{
		return $this->emailConfirmacao;
	}

	function GetCodigo(){
		return $this->codigo;
	}

	function GetDataCriacao(){
		return $this->dataCriacao;
	}

	function GetEmailConfirmacao(){
		return $this->emailConfirmacao;
	}

	function GetStatus(){
		return $this->status;
	}

	function GetValidade(){
		return $this->validade;
	}

	function GetIdUsuario(){
		return $this->idUsuario;
	}

	function SetIdEmailConfirmacao($valor){
		$this->idEmailConfirmacao = $valor;
	}

	function SetCodigo($valor){
		$this->codigo = $valor;
	}

	function SetDataCriacao($valor){
		$this->dataCriacao = $valor;
	}

	function SetEmailConfirmacao($valor){
		$this->emailConfirmacao = $valor;
	}

	function SetStatus($valor){
		$this->status = $valor;
	}

	function SetValidade($valor){
		$this->validade = $valor;
	}

	function SetIdUsuario($valor){
		$this->idUsuario = $valor;
	}


	function __construct()
	{
		SetDataCriacao(date());
	}
}

?>