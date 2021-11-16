<?php

use Alura\Banco\Modelo\{CPF, Funcionario};
use Alura\Banco\Service\{ControladorDeBonificacoes};

require_once 'autoload.php';

$umFuncionario = new Funcionario(
    'Edison Junior',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Funcionario(
    'Patricia',
    new CPF('175.986.702-80'),
    'Gerente',
    3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();
