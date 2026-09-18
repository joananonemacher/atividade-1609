<?php
require_once 'ItemBiblioteca.php';

class Livro extends ItemBiblioteca {
    // 10 Atributos Obrigatórios
    public $autor;
    public $isbn;
    public $genero;
    public $numeroCapitulos;
    public $edicao;
    public $tipoCapa;
    public $resumo;
    public $classificacaoIndicativa;
    public $quantidadeExemplares = 0;
    public $exemplaresDisponiveis = 0;

    // 1. Definir autor
    public function definirAutor($autor) {
        $this->autor = $autor;
    }

    // 2. Atualizar resumo
    public function atualizarResumo($novoResumo) {
        $this->resumo = $novoResumo;
    }

    // 3. Adicionar exemplar
    public function adicionarExemplar($quantidade) {
        $this->quantidadeExemplares += $quantidade;
        $this->exemplaresDisponiveis += $quantidade;
    }

    // 4. Remover exemplar
    public function removerExemplar($quantidade) {
        $this->quantidadeExemplares -= $quantidade;
        $this->exemplaresDisponiveis -= $quantidade;
    }

    // 5. Verificar estoque
    public function verificarEstoque() {
        return $this->exemplaresDisponiveis;
    }

    // 6. Exibir dados do livro
    public function exibirDadosLivro() {
        echo "Livro: {$this->titulo} | Autor: {$this->autor} | Disponíveis: {$this->exemplaresDisponiveis}<br>";
    }
}