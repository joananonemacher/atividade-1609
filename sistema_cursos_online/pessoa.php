<?php

class Pessoa {
    // 10 Atributos Obrigatórios
    public $nome;
    public $idade;
    public $cpf;
    public $email;
    public $telefone;
    public $endereco;
    public $cidade;
    public $estado;
    public $dataNascimento;
    public $usuarioAtivo;

    // 1. Cadastrar pessoa
    public function cadastrarPessoa($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        $this->usuarioAtivo = true;
    }

    // 2. Alterar e-mail
    public function alterarEmail($novoEmail) {
        $this->email = $novoEmail;
    }

    // 3. Alterar telefone
    public function alterarTelefone($novoTelefone) {
        $this->telefone = $novoTelefone;
    }

    // 4. Atualizar endereco
    public function atualizarEndereco($novoEndereco) {
        $this->endereco = $novoEndereco;
    }

    // 5. Alterar status
    public function alterarStatus($novoStatus) {
        $this->usuarioAtivo = $novoStatus;
    }

    // 6. Exibir perfil
    public function exibirPerfil() {
        echo "Nome: {$this->nome} | E-mail: {$this->email}<br>";
    }
}