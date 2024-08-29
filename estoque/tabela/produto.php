<?php

class Produto{
    private $nomeProduto;
    private $preco;
    private $quantidade;

    public function getnomeProduto(){
        return $this-> nomeProduto;
    }

public function setnomeProduto($nomeProduto){

    $this->nomeProduto = $nomeProduto;

}

public function setpreco($preco){

    $this->preco = $preco; 
}

public function getpreco(){

    return $this->preco;
}

public function setquantidade($quantidade){

    $this->quantidade = $quantidade;

}

public function getquantidade(){

    return $this->quantidade;
}


public function inserir(){

include "../config/conexao.php";

    $sql = "INSERT INTO produto(`nomeProduto`, `preco`, `quantidade`) VALUES
                                ('$this->nomeProduto','$this->preco', '$this->quantidade')
";
if (mysqli_query($conn,$sql)){
    return"gravado com sucesso!";

}else {
    return'erro na tabela produtos'.$sql;
}

}


}

?>