<?php

class Produto {
    // 10 Atributos Obrigatórios
    public $nome;
    public $codigo;
    public $preco;
    public $marca;
    public $categoria;
    public $descricao;
    public $quantidadeEstoque;
    public $peso;
    public $fornecedor;
    public $statusProduto;

    // 1. Cadastrar produto
    public function cadastrarProduto($nome, $codigo, $preco) {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->preco = $preco;
        $this->statusProduto = "Ativo";
    }

    // 2. Alterar preco
    public function alterarPreco($novoPreco) {
        $this->preco = $novoPreco;
    }

    // 3. Aplicar desconto
    public function aplicarDesconto($percentual) {
        $this->preco -= ($this->preco * ($percentual / 100));
    }

    // 4. Atualizar estoque
    public function atualizarEstoque($quantidade) {
        $this->quantidadeEstoque = $quantidade;
    }

    // 5. Alterar status
    public function alterarStatus($novoStatus) {
        $this->statusProduto = $novoStatus;
    }

    // 6. Exibir dados do produto
    public function exibirDadosProduto() {
        echo "Produto: {$this->nome} | Código: {$this->codigo} | Preço: R$ {$this->preco}<br>";
    }
}