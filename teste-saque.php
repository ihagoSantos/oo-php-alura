<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(new Titular(
    new Cpf('123.456.789-10'), 
    'Ihago', 
    new Endereco('Arcoverde', 'bairro teste', 'rua lá', '43'))
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();