<?php
require_once 'Pessoa.php';

class AlunoOnline extends Pessoa {
    // 10 Atributos Obrigatórios
    public $matricula;
    public $cursosInscritos = [];
    public $progressoCurso = 0;
    public $notaFinal;
    public $certificadoEmitido = false;
    public $dataInscricao;
    public $ultimoAcesso;
    public $planoAssinatura;
    public $nivelConhecimento;
    public $statusAluno;

    // 1. Inscrever em curso
    public function inscreverEmCurso($curso) {
        $this->cursosInscritos[] = $curso;
    }

    // 2. Assistir aula
    public function assistirAula($aula) {
        echo "Aluno {$this->nome} assistiu à aula: {$aula}<br>";
    }

    // 3. Atualizar progresso
    public function atualizarProgresso($valorProgresso) {
        $this->progressoCurso = $valorProgresso;
    }

    // 4. Registrar nota
    public function registrarNota($nota) {
        $this->notaFinal = $nota;
    }

    // 5. Emitir certificado
    public function emitirCertificado($curso) {
        $this->certificadoEmitido = true;
    }

    // 6. Exibir dados do aluno
    public function exibirDadosAluno() {
        echo "Aluno Online: {$this->nome} | Matrícula: {$this->matricula} | Progresso: {$this->progressoCurso}%<br>";
    }
}