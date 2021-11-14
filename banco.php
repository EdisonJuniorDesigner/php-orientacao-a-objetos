<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Edison Junior');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;

$segundaConta = new Conta('698.549.548-10', 'Patrícia');
var_dump($segundaConta);
