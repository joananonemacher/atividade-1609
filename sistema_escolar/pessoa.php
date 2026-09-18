<?php
class pessoa{
    public $nome;
    public $idade;
    public $cpf;
    public $email;
    public $telefone;
    public $endereco;
    public $cidade;
    public $estado;
    public $datanascimento;
    public $statuspessoa;

    // cadastro pessoa
public function cadastrarpessoa($nome, $idade, $cpf){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->cpf = $cpf;
    $this->statuspessoa = "ativo";
}

public function atualizaremail($novoemail){
    $this->email = $novoemail;
}

public function atualizartelefone($novotelefone){
    $this->telefone = $novotelefone;
}

public function alterarendereco($novoendereco){
    $this->endereco = $novoendereco;
}

public function alterarstatus($novostatus){
    $this->statuspessoa = $novoptatus;
}

    public function exibirdadospessoa(){
        echo "nome: {$this->nome} | 
            idade: {$this->idade} |
            CPF: {$this->cpf} |
            e-mail: {$this->email} |
            status: {$this->statusPessoa}
            <br>";
    }
}