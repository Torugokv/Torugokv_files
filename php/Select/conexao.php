<?php

$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'select';

$conn = new mysqli($hostname, $user, $password, $database);

if($conn->connect_errno) {
    die("Falha na conexao! (" . $conn->connect_errno . ")" . $conn->connect_error);
}

?>