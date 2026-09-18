<?php
require_once 'Produto.php';

class LivroProduto extends Produto {
    // 10 Atributos Obrigatórios
    public $autor;
    public $editora;
    public $isbn;
    public $genero;
    public $numeroPaginas;
    public $anoLancamento;
    public $idioma;
    public $tipoCapa;
    public $faixaEtaria;
    public $sinopse;

    // 1. Definir autor
    public function definirAutor($autor) {
        $this->autor = $autor;
    }

    // 2. Alterar editora
    public function alterarEditora($editora) {
        $this->editora = $editora;
    }

    // 3. Atualizar sinopse
    public function atualizarSinopse($sinopse) {
        $this->sinopse = $sinopse;
    }

    // 4. Alterar genero
    public function alterarGenero($genero) {
        $this->genero = $genero;
    }

    // 5. Informar faixa etaria
    public function informarFaixaEtaria($faixaEtaria) {
        $this->faixaEtaria = $faixaEtaria;
    }

    // 6. Exibir dados do livro
    public function exibirDadosLivro() {
        echo "Livro: {$this->nome} | Autor: {$this->autor} | Preço: R$ {$this->preco}<br>";
    }
}