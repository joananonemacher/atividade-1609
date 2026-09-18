<?php

class CursoOnline {
    // 10 Atributos Obrigatórios
    public $titulo;
    public $codigoCurso;
    public $descricao;
    public $cargaHoraria;
    public $nivel;
    public $instrutor;
    public $alunos = [];
    public $quantidadeAulas = 0;
    public $preco;
    public $statusCurso;

    // 1. Definir instrutor
    public function definirInstrutor($instrutor) {
        $this->instrutor = $instrutor;
    }

    // 2. Adicionar aluno
    public function adicionarAluno($aluno) {
        $this->alunos[] = $aluno;
    }

    // 3. Remover aluno
    public function removerAluno($aluno) {
        $key = array_search($aluno, $this->alunos);
        if ($key !== false) {
            unset($this->alunos[$key]);
        }
    }

    // 4. Adicionar aula
    public function adicionarAula($aula) {
        $this->quantidadeAulas++;
    }

    // 5. Alterar preco
    public function alterarPreco($valor) {
        $this->preco = $valor;
    }

    // 6. Exibir dados do curso
    public function exibirDadosCurso() {
        echo "<h2>Curso: {$this->titulo}</h2>";
        echo "Instrutor: " . ($this->instrutor ? $this->instrutor->nome : "Sem instrutor") . "<br>";
        echo "<h3>Participantes:</h3><ul>";
        foreach ($this->alunos as $aluno) {
            echo "<li>{$aluno->nome}</li>";
        }
        echo "</ul>";
    }
}