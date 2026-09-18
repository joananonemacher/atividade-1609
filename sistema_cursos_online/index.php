<?php
require_once 'Pessoa.php';
require_once 'AlunoOnline.php';
require_once 'Instrutor.php';
require_once 'CursoOnline.php';

// 1. Criar um instrutor
$instrutor = new Instrutor();
$instrutor->cadastrarPessoa("Ricardo Santos", "ricardo@email.com");
$instrutor->codigoInstrutor = "INS-88";

// 2. Criar tres alunos
$aluno1 = new AlunoOnline();
$aluno1->cadastrarPessoa("Gabriel", "gabriel@email.com");

$aluno2 = new AlunoOnline();
$aluno2->cadastrarPessoa("Juliana", "juliana@email.com");

$aluno3 = new AlunoOnline();
$aluno3->cadastrarPessoa("Matheus", "matheus@email.com");

// 3. Criar um curso online
$curso = new CursoOnline();
$curso->titulo = "PHP Orientado a Objetos";

// 4. Definir o instrutor do curso
$curso->definirInstrutor($instrutor);

// 5. Matricular os alunos
$curso->adicionarAluno($aluno1);
$curso->adicionarAluno($aluno2);
$curso->adicionarAluno($aluno3);

// 6. Mostrar a lista de participantes
$curso->exibirDadosCurso();