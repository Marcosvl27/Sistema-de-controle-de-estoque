<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "estoque";


$conn = new mysqli($host,$usuario,$senha,$banco);

if (!$conn){
    echo "NÃ£o foi possivel conectar ao Mysql. Erro #" .
    mysqli_connect_erro() . " : " . mysqli_connect_error();
} else {
    
}
$charset = $conn->set_charset('utf8');

?>