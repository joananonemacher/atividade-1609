<?php

class ItemBiblioteca {
    // 10 Atributos Obrigatórios
    public $titulo;
    public $codigo;
    public $anoPublicacao;
    public $editora;
    public $categoria;
    public $quantidadePaginas;
    public $idioma;
    public $status;
    public $localizacaoBiblioteca;
    public $dataCadastro;

    // 1. Cadastrar item
    public function cadastrarItem($titulo, $codigo) {
        $this->titulo = $titulo;
        $this->codigo = $codigo;
        $this->status = "Disponível";
    }

    // 2. Alterar status
    public function alterarStatus($novoStatus) {
        $this->status = $novoStatus;
    }

    // 3. Atualizar localizacao
    public function atualizarLocalizacao($novaLocalizacao) {
        $this->localizacaoBiblioteca = $novaLocalizacao;
    }

    // 4. Alterar categoria
    public function alterarCategoria($novaCategoria) {
        $this->categoria = $novaCategoria;
    }

    // 5. Verificar disponibilidade
    public function verificarDisponibilidade() {
        return $this->status === "Disponível";
    }

    // 6. Exibir dados do item
    public function exibirDadosItem() {
        echo "Título: {$this->titulo} | Código: {$this->codigo} | Status: {$this->status}<br>";
    }
}