<?php

class UsuarioBiblioteca {
    // 10 Atributos Obrigatórios
    public $nome;
    public $matricula;
    public $email;
    public $telefone;
    public $tipoUsuario;
    public $itensEmprestados = [];
    public $limiteEmprestimos = 3;
    public $quantidadeEmprestimos = 0;
    public $dataCadastro;
    public $statusUsuario = "Ativo";

    // 1. Emprestar item
    public function emprestarItem($item) {
        if ($this->verificarLimite() && $item->verificarDisponibilidade()) {
            $this->itensEmprestados[] = $item;
            $this->quantidadeEmprestimos++;
            $item->alterarStatus("Emprestado");
        }
    }

    // 2. Devolver item
    public function devolverItem($item) {
        $key = array_search($item, $this->itensEmprestados);
        if ($key !== false) {
            unset($this->itensEmprestados[$key]);
            $this->quantidadeEmprestimos--;
            $item->alterarStatus("Disponível");
        }
    }

    // 3. Listar emprestimos
    public function listarEmprestimos() {
        echo "<h3>Itens emprestados para {$this->nome}:</h3><ul>";
        foreach ($this->itensEmprestados as $item) {
            echo "<li>{$item->titulo} ({$item->codigo})</li>";
        }
        echo "</ul>";
    }

    // 4. Verificar limite
    public function verificarLimite() {
        return $this->quantidadeEmprestimos < $this->limiteEmprestimos;
    }

    // 5. Alterar status
    public function alterarStatus($novoStatus) {
        $this->statusUsuario = $novoStatus;
    }

    // 6. Exibir dados do usuario
    public function exibirDadosUsuario() {
        echo "Usuário: {$this->nome} | Matrícula: {$this->matricula} | Status: {$this->statusUsuario}<br>";
    }
}