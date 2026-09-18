<?php
require_once 'Produto.php';
require_once 'LivroProduto.php';
require_once 'Eletronico.php';
require_once 'CarrinhoCompra.php';

// 1. Criar um livro e um eletronico
$livro = new LivroProduto();
$livro->cadastrarProduto("Clean Code", "PROD-01", 120.00);
$livro->definirAutor("Robert C. Martin");

$eletronico = new Eletronico();
$eletronico->cadastrarProduto("Smartphone Galaxy", "PROD-02", 2500.00);
$eletronico->modelo = "S23";

// 2. Criar um carrinho para um cliente
$carrinho = new CarrinhoCompra();
$carrinho->codigoCarrinho = "CAR-99";
$carrinho->cliente = "Fernanda Oliveira";

// 3. Adicionar os produtos ao carrinho
$carrinho->adicionarProduto($livro);
$carrinho->adicionarProduto($eletronico);

// 4. Aplicar desconto em pelo menos um produto
$livro->aplicarDesconto(10); // 10% de desconto no livro

// 5 e 6. Calcular total e Mostrar resumo da compra
$carrinho->exibirResumoCarrinho();