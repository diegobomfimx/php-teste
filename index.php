<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Desafio técnico: Desenvolvedor de Software 🚀</h1>

<?php

// criando a classe Produto para poder criá-los, armazenando nome, preço e quantidade
class Produto {
    protected $nome;
    protected $preco;
    protected $quantidade;

    //função para definir as características do produto que será definida pelo usuário
    public function setProduto($data) {
            // verifica se todos os campos estão preenchidos
        if (isset($data['nome']) && isset($data['preco']) && isset($data['quantidade'])) {
            $this->nome = $data['nome'];
            $this->preco = $data['preco'];
            $this->quantidade = $data['quantidade'];
            echo "Produto cadastrado com sucesso.\n";
        } else {
            //retorno do erro caso todos os campos não estejam preenchidos
            echo "Erro: Informações incompletas para cadastrar o produto.\n";
        }
    }

    //função para mostrar no console o produto criado
    public function getProduto() {
        echo "Produto: {$this->nome}, Preço: {$this->preco}, Quantidade: {$this->quantidade}\n";
    }
}

//Nova classe que herda a classe anterior Produto, criada para realizar a venda
class Venda extends Produto {
    private $quantidadeVendida;
    private $desconto;
    private $produto;
    
    //função que realiza a venda do produto que foi colocado em sistema
    public function setVenda(Produto $produto, $quantidadeVendida, $desconto) {
        //verifica se o produto tem valor ou não
        if (!empty($produto->nome)) {
            //verifica se há quantidade do produto colocado em sistema, caso tenha, ele consegue realizar a venda
            if ($produto->quantidade >= $quantidadeVendida) {
            	$this->produto = $produto;
                $this->nome = $produto->nome;
                $this->preco = $produto->preco;
                $this->quantidadeVendida = $quantidadeVendida;
                $this->desconto = $desconto;
                $produto->quantidade -= $quantidadeVendida;

                echo "Venda registrada com sucesso. Produto: {$this->nome}, Quantidade Vendida: {$this->quantidadeVendida}, Desconto: {$this->desconto}%\n";
            } else {
                echo "Erro: Estoque insuficiente para a venda.\n";
            }
        } else {
            //verifica se o produto existe ou naõ para realizar a venda
            echo "Erro: Produto não cadastrado. Realize o cadastro antes de registrar a venda.\n";
        }
    }
    //função para verificar última vende e mostra estoque
    public function getVenda() {
        echo "Última venda registrada - Produto: {$this->nome}, Quantidade Vendida: {$this->quantidadeVendida}, Desconto: {$this->desconto}%\n";
        echo "Estoque Atual: {$this->produto->quantidade}\n";
    }
}
//testes de código
$produtoA = new Produto();
$produtoA->setProduto(['nome' => 'Produto A', 'preco' => 50, 'quantidade' => 100]);
$produtoA->getProduto();

$produtoB = new Produto();
$produtoB->setProduto(['nome' => 'Produto B', 'preco' => 70, 'quantidade' => 120]);
$produtoB->getProduto();

$venda = new Venda();
$venda->setVenda($produtoB, 20, 10);
$venda->setVenda($produtoA, 50, 10);

$venda->getVenda();


?>


</body>

</html>