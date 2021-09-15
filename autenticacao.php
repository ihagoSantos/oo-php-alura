<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once "autoload.php";

$autenticador = new Autenticador();
$diretor = new Diretor('Ihago Santos', new Cpf('123.456.789-10'), 10000);

$autenticador->tentaLogin($diretor, '1234');
