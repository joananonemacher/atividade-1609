<?php
require_once 'pessoa.php';

class professor extends pessoa{
    public $registroprofessor;
    public $disciplina;
    public $cargahoraria;
    public $salario;
    public $formacao;
    public $especialidade;
    public $turmasatendidas = [];
    public $horarioaula;
    public $anocontratacao;
    public $statusprofessor;

// adicionar disciplina
public function atribuirdisciplina($disciplina){
    $this->disciplina = $disciplina;
}
// adicionar turma
public function adicionarturma($turma){
    $this->turmasatendidas[] = $turma;
}
// alterar carga horaria
public function alterarcargahoraria($novacargahoraria){
    $this->cargaHoraria = $novacargahoraria;
}
// atualizar salario
public function atualizarsalario($novovalor){
    $this->salario = $novovalor;
}
public function exibirdadosprofessor(){
    echo "Professor: {$this->nome} |
     Registro: {$this->registroProfessor} |
      Disciplina: {$this->disciplina} |
       Salário: R$ {$this->salario}
       <br>";
    }
}