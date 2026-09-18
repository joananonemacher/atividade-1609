<?php
require_once 'ItemBiblioteca.php';

class Revista extends ItemBiblioteca {
    // 10 Atributos Obrigatórios
    public $numeroEdicao;
    public $mesPublicacao;
    public $temaPrincipal;
    public $periodicidade;
    public $jornalistaResponsavel;
    public $secaoPrincipal;
    public $codigoBarras;
    public $publicoAlvo;
    public $quantidadeMaterias = 0;
    public $patrocinador;

    // 1. Definir edicao
    public function definirEdicao($numeroEdicao) {
        $this->numeroEdicao = $numeroEdicao;
    }

    // 2. Alterar tema
    public function alterarTema($tema) {
        $this->temaPrincipal = $tema;
    }

    // 3. Atualizar periodicidade
    public function atualizarPeriodicidade($periodicidade) {
        $this->periodicidade = $periodicidade;
    }

    // 4. Adicionar materia
    public function adicionarMateria($quantidade) {
        $this->quantidadeMaterias += $quantidade;
    }

    // 5. Alterar publico alvo
    public function alterarPublicoAlvo($publicoAlvo) {
        $this->publicoAlvo = $publicoAlvo;
    }

    // 6. Exibir dados da revista
    public function exibirDadosRevista() {
        echo "Revista: {$this->titulo} | Edição: {$this->numeroEdicao} | Tema: {$this->temaPrincipal}<br>";
    }
}