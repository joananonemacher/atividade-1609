<?php

require_once 'itembiblioteca.php';
require_once 'livro.php';
require_once 'revista.php';
require_once 'usuariobiblioteca.php';

    $livro1 = new livro();
    $livro1->cadastraritem("O Senhor dos Anéis", "LIV-001");
    $livro1->definirautor("J.R.R. Tolkien");

    $livro2 = new livro();
    $livro2->cadastraritem("1984", "LIV-002");
    $livro2->definirautor("George Orwell");

    $revista = new revista();
    $revista->cadastraritem("National Geographic", "REV-001");
    $revista->definiredicao(202);

// usuario da biblioteca
    $usuario = new usuariobiblioteca();
    $usuario->nome = "Sananda";
    $usuario->matricula = "USU-500";

// emprestimo
    $usuario->emprestaritem($livro1);
    $usuario->emprestaritem($revista);



$usuario->listaremprestimos();

$usuario->devolveritem($livro1);


echo "
<h4>Após devolver 1 item:
    </h4>";
$usuario->listaremprestimos();