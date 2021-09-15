<?php
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'bairro qualquer', 'minha rua', '34');
$outroEndereco = new Endereco('Rio', 'centro', 'outra rua', '44');

echo $umEndereco . PHP_EOL;
echo $umEndereco->bairro;
exit();
echo $outroEndereco . PHP_EOL;
