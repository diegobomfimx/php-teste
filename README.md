# Desafio Técnico: Desenvolvedor de Software 🚀

Este é um código simples em PHP que simula um sistema de gestão de produtos e vendas. O sistema é composto por duas classes: `Produto` e `Venda`.

## Classe Produto

A classe `Produto` é responsável por representar um produto, armazenando informações como nome, preço e quantidade em estoque. Possui dois métodos principais:

- **setProduto($data):** Recebe um array associativo contendo as informações do produto (nome, preço e quantidade) e cadastra o produto se todas as informações estiverem preenchidas.

- **getProduto():** Exibe no console as informações do produto, como nome, preço e quantidade.

## Classe Venda

A classe `Venda` herda da classe `Produto` e adiciona funcionalidades relacionadas à venda do produto. Ela possui os seguintes métodos:

- **setVenda(Produto $produto, $quantidadeVendida, $desconto):** Registra uma venda do produto, reduzindo a quantidade em estoque de acordo com a quantidade vendida e aplicando um desconto.

- **getVenda():** Exibe no console a última venda registrada, incluindo informações como produto, quantidade vendida, desconto e o estoque atual após a venda.

## Testes de Código

O código inclui alguns testes para demonstrar o funcionamento do sistema. Ele cria dois produtos, realiza vendas desses produtos e exibe no console as informações relacionadas às vendas e aos produtos.

## Execução

Para executar o código, basta incorporá-lo a um ambiente PHP e abrir o arquivo no navegador ou linha de comando. Certifique-se de ter um ambiente PHP configurado para que o código funcione corretamente.

Esse é um exemplo simples de como estruturar um sistema básico de gestão de produtos e vendas em PHP. Sinta-se à vontade para explorar e modificar conforme necessário!
