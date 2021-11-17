<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'bairro qualquer', 'Minha rua', '71B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua ai', '50');

// testando o __set e __get
echo $outroEndereco->cidade;

echo $umEndereco. PHP_EOL;
echo $outroEndereco;
