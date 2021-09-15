<?php

// require_once 'src/Modelo/Conta/Conta.php';
// require_once 'src/Modelo/Pessoa.php';
// require_once 'src/Modelo/Conta/Titular.php';
// require_once 'src/Modelo/Cpf.php';
// require_once 'src/Modelo/Endereco.php';

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

$endereco1 = new Endereco('Garanhuns', 'bairro', 'rua', '234');

$ihago = new Titular(new Cpf('123.456.789-10'),'Ihago', $endereco1);
$primeiraConta = new Conta($ihago);
// var_dump($primeiraConta);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$endereco2 = new Endereco('Seilá', 'teste bairro', 'teste rua', '53');
$ana = new Titular(new Cpf('234.567.890-12'), 'Ana Beatriz', $endereco2);
$segundaConta = new Conta($ana);

$endereco3 = new Endereco('Arcoverde', 'um bairro', 'minha rua', '234');

$pedro = new Titular(new Cpf('234.567.890-13'),'Pedro', $endereco3);
$terceiraConta = new Conta($pedro);

$maria = new Titular(new Cpf('234.567.890-14'), 'Maria', $endereco3);
$quartaConta = new Conta($maria);

unset($segundaConta);
echo 'Número de Contas: ' . Conta::recuperarNumeroDeContas() . PHP_EOL; // chamando método estático