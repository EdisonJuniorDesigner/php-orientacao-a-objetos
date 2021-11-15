<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, Conta};
use Alura\Banco\Modelo\{Endereco, CPF};

$endereco = new Endereco('Belford Roxo', 'um bairro', 'minha rua', '900');
$edison = new Titular(new CPF('123.456.789-10'), 'Edison Junior', $endereco);
$primeiraConta = new Conta($edison);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.879-10'), 'Abcderfg', $outroEndereco));
unset($segundaConta);

echo Conta::recuperaNumeroDeContas();
