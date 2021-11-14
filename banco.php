<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok
$primeiraConta->defineCpfTitular('123.465.789-10');

echo $primeiraConta->recuperaSaldo().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular();
