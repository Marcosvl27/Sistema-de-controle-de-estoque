<?php
include "../config/conexao.php";

if (isset($_GET['idproduto'])) {
    $id = $_GET['idproduto'];
    $sql = "DELETE FROM produto WHERE idproduto=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: consulta.php");
    } else {
        echo "Erro ao excluir o produto: " . $conn->error;
    }
}

$conn->close();
?>
