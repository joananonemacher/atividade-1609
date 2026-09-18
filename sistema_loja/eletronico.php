<?php
require_once 'Produto.php';

class Eletronico extends Produto {
    // 10 Atributos Obrigatórios
    public $modelo;
    public $voltagem;
    public $garantiaEmMeses;
    public $numeroSerie;
    public $cor;
    public $capacidade;
    public $sistemaOperacional;
    public $consumoEnergia;
    public $acessoriosInclusos = [];
    public $assistenciaTecnica;

    // 1. Definir garantia
    public function definirGarantia($meses) {
        $this->garantiaEmMeses = $meses;
    }

    // 2. Alterar voltagem
    public function alterarVoltagem($voltagem) {
        $this->voltagem = $voltagem;
    }

    // 3. Atualizar capacidade
    public function atualizarCapacidade($capacidade) {
        $this->capacidade = $capacidade;
    }

    // 4. Informar acessorios
    public function informarAcessorios($listaDeAcessorios) {
        $this->acessoriosInclusos = $listaDeAcessorios;
    }

    // 5. Verificar garantia
    public function verificarGarantia() {
        return $this->garantiaEmMeses > 0;
    }

    // 6. Exibir dados do eletronico
    public function exibirDadosEletronico() {
        echo "Eletrônico: {$this->nome} | Modelo: {$this->modelo} | Preço: R$ {$this->preco}<br>";
    }
}