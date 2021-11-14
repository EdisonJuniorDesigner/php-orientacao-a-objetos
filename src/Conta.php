<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

    // inicializando os atributos
    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    public function saca(float $valorASacar):void
    {
        if($valorASacar > $this->saldo){
            echo "Saldo indisponível".PHP_EOL;
            return;
        }

        $this->saldo -= $valorASacar;
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

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperaNomeTitular():string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
