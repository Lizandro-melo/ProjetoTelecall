<?php
class Cliente
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
    private string $login;
    private string $senha;

    public function __construct(DbConnection $db, $login, $senha){
        foreach($db->__getCliente($login, $senha) as $row){
            $this->nome=$row['nome'];
            $this->sobrenome=$row['sobrenome'];
            $this->cpf=$row['cpf'];
            $this->sexo=$row['sexo'];
            $this->dataNascimento=$row['data_nascimento'];
            $this->telefoneCelular=$row['telefone_celular'];
            $this->telefoneFixo=$row['telefone_fixo'];
            $this->nomeMaterno=$row['nome_materno'];
            $this->endereco=$row['endereco'];
            $this->login=$row['login'];
            $this->senha=$row['senha'];
        }
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
    public function __getSexo(){
        return $this->sexo;
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
    public function __getTelefoneFixo(){
        return $this->telefoneFixo;
    }
    public function __gerNomeMaterno(){
        return $this->nomeMaterno;
    }
    public function __gerEndereco(){
        return $this->endereco;
    }

    public function __setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function __setSobrenome(string $sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }
    public function __setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }
    public function __setSexo(string $sexo){
        $this->sexo = $sexo;
    }
    public function __setDataNascimento(string $dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
    public function __setTelefoneCelular(string $telefoneCelular)
    {
        $this->telefoneCelular = $telefoneCelular;
    }
    public function __setLogin(string $login)
    {
        $this->login = $login;
    }
    public function __setSenha(string $senha)
    {
        $this->senha = $senha;
    }
    public function __setTelefoneFixo(string $telefoneFixo){
        $this->telefoneFixo = $telefoneFixo;
    }
    public function __setNomeMaterno(string $nomeMaterno){
        $this->nomeMaterno = $nomeMaterno;
    }
    public function __setEndereco($endereco){
        $this->endereco = $endereco;
    }

}
