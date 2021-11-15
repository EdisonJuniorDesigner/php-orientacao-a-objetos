<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private Titular $titular;
    protected float $saldo;

    // atributo estático da classe
    private static int $numeroDeContas = 0;

    // inicializando os atributos
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    //quando apago uma conta ele diminui a contagem de contas
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar):void
    {
        $tarifaSaque = $valorASacar * 0.05;
        $valorSaque = $valorASacar + $tarifaSaque;
        if($valorSaque > $this->saldo){
            echo "Saldo indisponível".PHP_EOL;
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar):void
    {
        if($valorADepositar <= 0){
            echo "Valor precisa ser positivo".PHP_EOL;
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino):void
    {
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponível".PHP_EOL;
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo():float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular():string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }

    // método estático
    public static function recuperaNumeroDeContas():int
    {
        return self::$numeroDeContas;
    }
}
