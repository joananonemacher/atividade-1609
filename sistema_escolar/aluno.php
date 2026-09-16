<?php
require_once 'pessoa.php';

class aluno extends pessoa{
    public $matricula;
    public $serie;
    public $turmaatual;
    public $nota1;
    public $nota2;
    public $nota3;
    public $mediafinal;
    public $situacao;
    public $responsavel;
    public $datamatricula;

public function matricularemturma($turma){
    $this->turmaatual = $turma;
}

public function adicionarnota($valornota){
    if ($this->nota1 === null){
        $this->nota1 = $valornota;
} 
    elseif ($this->nota2 === null){
        $this->nota2 = $valornota;
} 
    elseif ($this->nota3 === null){
            $this->nota3 = $valornota;
}
    }

public function calcularmedia(){
    $this->mediafinal = ($this->nota1 + $this->nota2 + $this->nota3) / 3;
        return $this->mediafinal;
}

public function alterarsituacao($novasituacao){
    $this->situacao = $novasituacao;
}

public function trocarturma($novaturma){
    $this->turmaatual = $novaturma;
}
public function exibirdadosaluno(){
    echo "aluno: {$this->nome} |
    matrícula: {$this->matricula} |
    média: {$this->mediafinal} |
    situação: {$this->situacao}
    <br>";
}
}