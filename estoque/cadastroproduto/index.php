<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <form action="validarproduto.php" method="post" class="product-form">
<label for="Nome">Nome do produto 
<input type="text" id="nomeproduto" name="nomeproduto">        
</label>
<label for="quantidade">Quantidade de produtos 
<input type="number" id="quantidade" name="quantidade">      
</label>
<label for="preco">Preço
<input type="number" id="preco" name="preco">         
</label>
<button type="submit"> Cadastrar</button>
</form>
</body>
</html>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #027a9e;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.product-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.product-form label {
    display: flex;
    flex-direction: column;
    font-weight: bold;
    color: #333;
}

.product-form input {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-top: 5px;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s;
}

.product-form input:focus {
    border-color: #007BFF;
}

.product-form button {
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #007BFF;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.product-form button:hover {
    background-color: #0056b3;
}

</style>