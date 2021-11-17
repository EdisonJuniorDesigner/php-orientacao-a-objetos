<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Titular(
    new CPF('132.456.789-10'),
    'João da Silva',
    new Endereco('B. Roxo', 'Bairro A', 'Rua B', '251')
);

$autenticador->tentaLogin($umDiretor, 'abcd');
