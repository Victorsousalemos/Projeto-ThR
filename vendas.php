<?php

function clean_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);

    return $input;
}



$produto = $_POST['produto'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$produto = clean_input($produto);
$nome = clean_input($nome);
$email = clean_input($email);
$telefone = clean_input($telefone);




$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'vendas';
$port = '3306';

$db_connect = new mysqli($server, $user, $password, $dbname, $port);

if ($db_connect->connect_error == true) {
    echo 'Não foi possível conectar à base de dados.';
} else {
    $sql = "INSERT INTO vendas(produto,nome,email,telefone) VALUES ('$produto','$nome', '$email', '$telefone')";

    $db_connect->query($sql);

    echo "<script> alert('Vendido com Sucesso')</script>";

    echo "<script>setTimeout(function(){
                            window.location.href = 'index.html'}, 2000)</script>";
}
