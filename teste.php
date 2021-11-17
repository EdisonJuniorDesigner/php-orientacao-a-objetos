<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

require_once 'autoload.php';

$desenvolvedor = new Desenvolvedor(
    'Edison Junior',
    new CPF('123.456.789-10'),
    2000
);

echo $desenvolvedor->nome;
