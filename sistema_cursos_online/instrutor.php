<?php
require_once 'Pessoa.php';

class Instrutor extends Pessoa {
    // 10 Atributos Obrigatórios
    public $codigoInstrutor;
    public $areaAtuacao;
    public $formacao;
    public $cursosCriados = [];
    public $avaliacaoMedia;
    public $biografia;
    public $anosExperiencia;
    public $redeSocial;
    public $valorHora;
    public $statusInstrutor;

    // 1. Criar curso
    public function criarCurso($curso) {
        $this->cursosCriados[] = $curso;
    }

    // 2. Publicar aula
    public function publicarAula($tituloAula) {
        echo "Aula '{$tituloAula}' publicada por {$this->nome}<br>";
    }

    // 3. Atualizar biografia
    public function atualizarBiografia($texto) {
        $this->biografia = $texto;
    }

    // 4. Alterar valor hora
    public function alterarValorHora($valor) {
        $this->valorHora = $valor;
    }

    // 5. Adicionar area
    public function adicionarArea($area) {
        $this->areaAtuacao = $area;
    }

    // 6. Exibir dados do instrutor
    public function exibirDadosInstrutor() {
        echo "Instrutor: {$this->nome} | Área: {$this->areaAtuacao}<br>";
    }
}