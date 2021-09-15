<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Gerente,Diretor,Desenvolvedor, EditorVideo};
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;


$umaGerente = new Gerente("Patricia", new Cpf('121.333.144-12'), 3000);
$umaDiretora = new Diretor("Ana Paula", new Cpf('123.444.555-14'), 5000);

$umDev= new Desenvolvedor("Pedro", new Cpf('999.999.222-01'), 1000);
$umDev->sobeDeNivel();

$umEditor = new EditorVideo("Paulo", new Cpf("898.454.656-10"), 1500);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umaDiretora);
$controlador->adicionaBonificacaoDe($umDev);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();