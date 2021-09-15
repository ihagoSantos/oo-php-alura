<?php 

namespace Alura\Banco\Modelo;

final class Cpf
{
    private $numero;

    public function __construct(string $numero)
    {
        $this->validarCpf($numero);
        $this->numero = $numero;
    }

    public function recuperaCpf(): string
    {
        return $this->numero;
    }

    private function validarCpf(string $numero): void
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($numero === false){
            echo "Cpf Inválido";
            exit();
        }
    }
}