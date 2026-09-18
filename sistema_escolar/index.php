<?php

require_once 'pessoa.php';
require_once 'aluno.php';
require_once 'professor.php';
require_once 'turma.php';

// 2 ano
$turma = new turma();
$turma->nometurma = "2º Ano";
$turma->codigoturma = "TURMA-201";
$turma->limitealunos = 30;

// prof conselheiro
$prof = new professor();
$prof->cadastrarpessoa("Barbara", 30, "111.222.333-44");
$prof->registroprofessor = "PROF-201";
$prof->atribuirdisciplina("ciências-humanas");

// alunos
$aluno1 = new aluno();
$aluno1->cadastrarpessoa("Ana julia", 17, "222.333.444-55");
$aluno1->matricula = "ALU-201";

$aluno2 = new aluno();
$aluno2->cadastrarpessoa("Gabrielle", 17, "333.444.555-66");
$aluno2->matricula = "ALU-201";

$aluno3 = new aluno();
$aluno3->cadastrarpessoa("Valentina", 16, "444.555.666-77");
$aluno3->matricula = "ALU-201";


$turma->definirprofessor($prof);

$turma->adicionaraluno($aluno1);
$turma->adicionaraluno($aluno2);
$turma->adicionaraluno($aluno3);

$turma->exibirdadosturma();