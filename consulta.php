<?php

function clean_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);

    return $input;
}


$nome = $_POST['nome'];


$nome = clean_input($nome);



$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'vendas';
$port = '3306';

$db_connect = new mysqli($server, $user, $password, $dbname, $port);

if ($db_connect->connect_error == true) {
    echo 'Não foi possível conectar à base de dados.';
} else {
    $sql = "INSERT INTO consulta(nome) VALUES ('$nome')";

    $db_connect->query($sql);

    echo "<script> alert('Consultado com Sucesso')</script>";


    //echo "<script>setTimeout(function(){
    //                       window.location.href = 'index.html'}, 2000)</script>";



    //criando a query de consulta à tabela criada 
    $result = $db_connect->query("SELECT * FROM consulta");


    //pecorrendo os registros da consulta. 
    while ($aux = mysqli_fetch_assoc($result)) {
        echo "-----------------------------------------<br />";
        echo "Nome:" . $aux["nome"] . "<br />";
    }
}
