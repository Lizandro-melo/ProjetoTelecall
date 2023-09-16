<?php
class Cliente
{
    public string $nome;
    public string $sobrenome;
    public string $cpf;
    public string $sexo;
    public string $dataNascimento;
    public string $telefoneCelular;
    public string $telefoneFixo;
    public string $nomeMaterno;
    public string $endereco;
    public bool $adm;
    private string $login;
    private string $senha;

    public function __construct(DbConnection $db, $login, $senha){
        foreach($db->__getCliente($login, $senha) as $row){
            $this->nome=$row['nome'];
            $this->sobrenome=$row['sobrenome'];
            $this->cpf=$row['cpf'];
            $this->sexo=$row['sexo'];
            $this->dataNascimento=$row['data_nascimento'];
            $this->nomeMaterno=$row['nome_materno'];
            $this->telefoneCelular=$row['tel_cel'];
            $this->telefoneFixo=$row['tel_fix'];
            $this->endereco=$row['endereco'];
            $this->adm=$row['adm'];
            $this->login=$row['login'];
            $this->senha=$row['senha'];
        }
    }

    
    public function __getLogin()
    {
        return $this->login;
    }
    public function __getSenha()
    {
        return $this->senha;
    }

    
    public function __setLogin(string $login)
    {
        $this->login = $login;
    }
    public function __setSenha(string $senha)
    {
        $this->senha = $senha;
    }
}
