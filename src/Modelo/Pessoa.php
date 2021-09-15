<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    use AcessoPropriedades; //chama trait

    protected $nome;
    private $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    final protected function validaNome(string $nome): void
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}