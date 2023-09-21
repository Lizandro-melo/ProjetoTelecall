<?php
class ClienteComum
{
    private string $nome;
    private string $sobrenome;
    private string $cpf;
    private string $sexo;
    private string $dataNascimento;
    private string $telefoneCelular;
    private string $telefoneFixo;
    private string $nomeMaterno;
    private string $endereco;
    private bool $adm;
    private string $login;
    private string $senha;


	/**
	 * @return string
	 */
	public function getNome(): string {
		return $this->nome;
	}
	
	/**
	 * @param string $nome 
	 * @return self
	 */
	public function setNome(string $nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getSobrenome(): string {
		return $this->sobrenome;
	}
	
	/**
	 * @param string $sobrenome 
	 * @return self
	 */
	public function setSobrenome(string $sobrenome): self {
		$this->sobrenome = $sobrenome;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getCpf(): string {
		return $this->cpf;
	}
	
	/**
	 * @param string $cpf 
	 * @return self
	 */
	public function setCpf(string $cpf): self {
		$this->cpf = $cpf;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getSexo(): string {
		return $this->sexo;
	}
	
	/**
	 * @param string $sexo 
	 * @return self
	 */
	public function setSexo(string $sexo): self {
		$this->sexo = $sexo;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getDataNascimento(): string {
		return $this->dataNascimento;
	}
	
	/**
	 * @param string $dataNascimento 
	 * @return self
	 */
	public function setDataNascimento(string $dataNascimento): self {
		$this->dataNascimento = $dataNascimento;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getTelefoneCelular(): string {
		return $this->telefoneCelular;
	}
	
	/**
	 * @param string $telefoneCelular 
	 * @return self
	 */
	public function setTelefoneCelular(string $telefoneCelular): self {
		$this->telefoneCelular = $telefoneCelular;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getTelefoneFixo(): string {
		return $this->telefoneFixo;
	}
	
	/**
	 * @param string $telefoneFixo 
	 * @return self
	 */
	public function setTelefoneFixo(string $telefoneFixo): self {
		$this->telefoneFixo = $telefoneFixo;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getNomeMaterno(): string {
		return $this->nomeMaterno;
	}
	
	/**
	 * @param string $nomeMaterno 
	 * @return self
	 */
	public function setNomeMaterno(string $nomeMaterno): self {
		$this->nomeMaterno = $nomeMaterno;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getEndereco(): string {
		return $this->endereco;
	}
	
	/**
	 * @param string $endereco 
	 * @return self
	 */
	public function setEndereco(string $endereco): self {
		$this->endereco = $endereco;
		return $this;
	}
	
	/**
	 * @return bool
	 */
	public function getAdm(): bool {
		return $this->adm;
	}
	
	/**
	 * @param bool $adm 
	 * @return self
	 */
	public function setAdm(bool $adm): self {
		$this->adm = $adm;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getLogin(): string {
		return $this->login;
	}
	
	/**
	 * @param string $login 
	 * @return self
	 */
	public function setLogin(string $login): self {
		$this->login = $login;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getSenha(): string {
		return $this->senha;
	}
	
	/**
	 * @param string $senha 
	 * @return self
	 */
	public function setSenha(string $senha): self {
		$this->senha = $senha;
		return $this;
	}
}
