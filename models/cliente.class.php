<?php

class Cliente{

    private string $nome;
    private string $sobrenome;
    private string $cpf;
    private string $dataNascimento;
    private string $telefoneCelular;
    private string $login;
    private string $senha;

    public function __construct(DbConnection $db) {
        
    }

    public function __getNome()
    {
        return $this->nome;
    }
    public function __getSobrenome()
    {
        return $this->sobrenome;
    }
    public function __getCpf()
    {
        return $this->cpf;
    }
    public function __getDataNascimento()
    {
        return $this->dataNascimento;
    }
    public function __getTelefoneCelular()
    {
        return $this->telefoneCelular;
    }
    public function __getLogin()
    {
        return $this->login;
    }
    public function __getSenha()
    {
        return $this->senha;
    }
}




?>
