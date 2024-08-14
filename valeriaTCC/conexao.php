<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'escola';
$dbName = 'Kanequinhas';

$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao){
    die("Houve um erro:".mysqli_connect_error());

}
?>