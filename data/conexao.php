<?php

$host="localhost";
$dbnmae="estoque3";
$user="root";
$password="root";

$conn = new mysqli(
    $host,
    $user,
    $password,
    $dbnmae   
);

if($conn ->connect_error){
    die("Falha na conexão" .
        $conn->connect_error);
}