<?php

date_default_timezone_set('America/Sao_Paulo');



//Objeto responsvel por conectar ao banco de dados
class ConnectionDb {

    private $host="localhost";
    private $port=3306;
    private $user="root";
    private $password="415263";
    private $dbname="telecall";
    private $con;

    //Construtor, ele é responsavel por executar uma função assim que o objeto for instaciado;
    //Neste caso ele se conceta direto ao banco e devolve a conexao em $con
    public function __construct()
    {
        $this->con = new mysqli($this->host, $this->user, $this->password, $this->dbname, $this->port);
        if($this->con === false){
            die("ERROR: Não foi possível se conectar ao banco de dados MySQL. " . mysqli_connect_error());
        } else {
            /* set autocommit para falso */
            mysqli_autocommit($this->con, FALSE);
         }
    }

    //getCon é responsavel por pegar o atributo con e assim executar as querys
	public function getCon() {
		return $this->con;
	}
}
