<?php


// Create connection
$conn = mysqli_connect("localhost","", "", "test");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


print"conectou";

$v1="marcelo";
$v2="kle";
$v3="mmmm@mmm.com";

$cadastrar = cadastro($v1,$v2,$v3);


mysqli_query($conn,$cadastrar);


function cadastro ($login, $senha, $email){


    $db = "insert into usuario (usuario, senha, email) values ('$login','$senha','$email')";

    return $db;


    echo $db;

}
