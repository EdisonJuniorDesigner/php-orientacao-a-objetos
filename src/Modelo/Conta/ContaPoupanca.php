<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * 0.03;
        $valorSaque = $valorASacar + $tarifaSaque;
        if($valorSaque > $this->saldo){
            echo "Saldo indisponível".PHP_EOL;
            return;
        }

        $this->saldo -= $valorSaque;
    }
}
