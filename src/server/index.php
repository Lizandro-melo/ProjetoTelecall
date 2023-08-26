<?php
require("db/connectionDb.class.php");
require("models/cliente.class.php");
try {
    $login = (string) $_POST['login'];
    $senha = (string) $_POST['senha'];
    $db = new DbConnection();
    $db->__autentication($login, $senha);
    $cliente = new Cliente($db, $login, $senha);

} catch (Exception $e) {
    echo $e->getMessage();
}

?>