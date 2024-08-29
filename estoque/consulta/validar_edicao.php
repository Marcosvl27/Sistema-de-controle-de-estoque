<?php

include("../config/conexao.php");

$idproduto = intval($_POST['idproduto']);
    $nomeProduto = $conn->real_escape_string($_POST['nomeproduto']);
    $quantidade = intval($_POST['quantidade']);
    $preco = floatval($_POST['preco']);

    $sql = "UPDATE produto SET nomeProduto='$nomeProduto', quantidade='$quantidade', preco='$preco' WHERE idproduto=$idproduto";

    if ($conn->query($sql) === TRUE) {
        echo "Produto atualizado com sucesso!";
        header("Location: consulta.php"); 
        exit;
    } else {
        echo "Erro ao atualizar o produto: " . $conn->error;
    }


?>