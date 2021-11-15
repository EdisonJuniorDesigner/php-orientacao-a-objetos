<?php

use Alura\Banco\Modelo\Conta\{Titular, Conta, ContaPoupanca};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.465.789-10'),
        'Edison Junior',
        new Endereco('Belford Roxo', 'meu bairro', 'minha rua', '900')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
