<?php
require("db/connectionDb.class.php");


$db = new DbConnection();

$login = $_POST['login'];
$senha = $_POST['senha'];



$db->__autentication($login, $senha);


?>
