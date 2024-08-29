<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="consulta.css">
</head>
<body>

<h1>Estoque de Produtos</h1>
    <div class="actions">
        <input type="text" id="pesquisa" placeholder="Pesquisar produto...">
        <button id="adicionar_produto" onclick="location.href='../cadastroproduto/index.php'">Adicionar Produto</button>
    </div>
<?php
include "../config/conexao.php";

$sql = "SELECT * FROM produto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id='product-table'>
            <tr>
                <th>ID</th>
                <th>Nome do produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Data de inclusão</th>
                <th>Ações</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["idproduto"] . "</td>
                <td>" . $row["nomeProduto"] . "</td>
                <td>" . $row["quantidade"] . "</td>
                <td> R$ "  . $row["preco"] . "</td>
                <td>" . $row["data_cadastro"] . "</td>
               <td>
                      <button onclick=\"location.href='editar_produto.php?idproduto=" . $row["idproduto"] . "'\">Editar</button>
                    <button onclick=\"location.href='deletar_produto.php?idproduto=" . $row["idproduto"] . "'\">excluir </button>
               </td>
                
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
</body>
</html>

<script>



    document.getElementById('pesquisa').addEventListener('input', function() {
    var valorPesquisa = this.value.toLowerCase();
    let rows = document.querySelectorAll('#product-table tr:not(:first-child)');
    
    rows.forEach(row => {
       
        let nome_Produto = row.children[1].textContent.toLowerCase();

        if (nome_Produto.includes(valorPesquisa)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
    
});




</script>


<style>
 
td {
    color: black;
    border: 1px solid black;
    background-color: aquamarine;
    padding: 8px;
    text-align: left;
}

th {
    color: black;
    border: 1px solid black;
    background-color: lightgray;
    padding: 10px;
    text-align: left;
}

body {
    background-color: rgb(38, 38, 46);
    font-family: Arial, sans-serif;
    color: white;
    margin: 0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}


table {
    background-color: white;
    margin-top: 20px;
    border-collapse: collapse;
    width: 80%;
    max-width: 800px;
}


h1 {
    margin-top: 20px;
}


.actions {
    margin-top: 20px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    width: 80%;
    max-width: 800px;
    gap: 10px;
   
}

#pesquisa {
    padding: 10px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    width: 70%;
    margin-right: auto;
}

#adicionar_produto {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    background-color: #007BFF;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s;
}

#adicionar_produto:hover {
    background-color: #0056b3;
}


button {
    padding: 5px 10px;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
 
}

button:hover {
    opacity: 0.8;
   
}

button[onclick*="editar_produto"] {
    background-color: #FFC107;
    color: black;
}

button[onclick*="deletar_produto"] {
    background-color: #DC3545;
    color: white;
}

</style>