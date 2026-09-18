<?php

class CarrinhoCompra {
    // 10 Atributos Obrigatórios
    public $codigoCarrinho;
    public $cliente;
    public $produtos = [];
    public $quantidadeItens = 0;
    public $valorTotal = 0.0;
    public $descontoTotal = 0.0;
    public $dataCompra;
    public $formaPagamento;
    public $statusCarrinho;
    public $enderecoEntrega;

    // 1. Adicionar produto
    public function adicionarProduto($produto) {
        $this->produtos[] = $produto;
        $this->quantidadeItens++;
    }

    // 2. Remover produto
    public function removerProduto($produto) {
        $key = array_search($produto, $this->produtos);
        if ($key !== false) {
            unset($this->produtos[$key]);
            $this->quantidadeItens--;
        }
    }

    // 3. Calcular total
    public function calcularTotal() {
        $this->valorTotal = 0;
        foreach ($this->produtos as $produto) {
            $this->valorTotal += $produto->preco;
        }
        $this->valorTotal -= $this->descontoTotal;
        return $this->valorTotal;
    }

    // 4. Aplicar cupom
    public function aplicarCupom($valorOuPercentual) {
        $this->descontoTotal = $valorOuPercentual;
    }

    // 5. Alterar forma de pagamento
    public function alterarFormaPagamento($formaPagamento) {
        $this->formaPagamento = $formaPagamento;
    }

    // 6. Exibir resumo do carrinho
    public function exibirResumoCarrinho() {
        echo "<h2>Resumo do Carrinho ({$this->codigoCarrinho})</h2>";
        echo "Cliente: {$this->cliente}<br>";
        echo "<h3>Produtos:</h3><ul>";
        foreach ($this->produtos as $p) {
            echo "<li>{$p->nome} - R$ {$p->preco}</li>";
        }
        echo "</ul>";
        echo "Total: R$ " . $this->calcularTotal() . "<br>";
    }
}