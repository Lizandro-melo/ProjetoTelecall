<?php

date_default_timezone_set('America/Sao_Paulo');


class ConnectionDb {

    private $host="localhost";
    private $port=3306;
    private $user="root";
    private $password="415263";
    private $dbname="telecall";
    private $con;

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
	public function getCon() {
		return $this->con;
	}
}
