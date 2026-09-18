<?php

class turma{
    public $nometurma;
    public $codigoturma;
    public $anoletivo;
    public $sala;
    public $turno;
    public $professorresponsavel;
    public $listaalunos = [];
    public $limitealunos;
    public $curso;
    public $statusturma;

// professor
public function definirprofessor($professor){
    $this->professorresponsavel = $professor;
}
// aluno
public function adicionaraluno($aluno){
    if ($this->verificarvagas()) {
        $this->listaalunos[] = $aluno;
    }
}
// tirar aluno
public function removeraluno($aluno){
    $key = array_search($aluno, $this->listaalunos);
        if ($key !== false){
            unset($this->listaalunos[$key]);
    }
}

// num alunos
public function contaralunos(){
    return count($this->listalunos);
}

// vagas
public function verificarvagas(){
    return $this->contaralunos() < $this->limitealunos;
}

public function exibirdadosturma(){
    echo "<h2>Turma: {$this->nometurma} ({$this->codigoturma})
    </h2>";

    echo "Professor Responsável: " . ($this->professorresponsavel ? $this->professorresponsavel->nome : "Nenhum") . 
        "<br>";

    echo "Total de Alunos: " . $this->contaralunos() . "<br>";
    
    echo "
    <h3>Lista de Alunos:
    </h3>
    <ul>";
        
    
    foreach ($this->listaalunos as $aluno){
            echo "<li>{$aluno->nome} 
            (Matrícula: {$aluno->matricula})
            
            </li>";
    }
        echo "</ul>";
    }
}