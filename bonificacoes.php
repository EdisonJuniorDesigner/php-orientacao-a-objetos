<?php

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{EditorVideo, Gerente, Diretor, Desenvolvedor};
use Alura\Banco\Service\{ControladorDeBonificacoes};

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor(
    'Edison Junior',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('175.986.702-80'),
    3000
);

$umDiretor = new Diretor(
    'Roberto',
    new CPF('145.926.752-20'),
    5000
);

$umEditor = new EditorVideo(
    'Lucas Araújo',
    new CPF('158.456.785-02'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
