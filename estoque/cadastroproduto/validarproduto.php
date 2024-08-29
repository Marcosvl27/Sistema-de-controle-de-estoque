<?php

$nomeProduto = $_POST["nomeproduto"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];

include "../tabela/produto.php";

$Produto = new Produto;

$Produto->setnomeProduto($nomeProduto);
$Produto->setquantidade($quantidade);
$Produto->setpreco($preco);
$Produto->inserir();


header("location: ../consulta/consulta.php");

?>
