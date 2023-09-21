<?php

class ConnectionDb {

    private $host="localhost";
    private $port=3306;
    private $user="root";
    private $password="Lizandro415263";
    private $dbname="clientes";
    private $con = new mysqli($host, $user, $password, $dbname, $port) 
        or die ('Could not connect to the database server' . mysqli_connect_error());

	public function getCon() {
		return $this->con;
	}
}
