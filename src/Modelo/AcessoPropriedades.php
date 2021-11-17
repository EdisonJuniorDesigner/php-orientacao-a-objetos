<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        // rua -> recuperaRua
        // $metodo = 'recupera' . ucfirst($nomeAtributo);
        // return $this->$metodo();
        return $this->$nomeAtributo;
    }

    public function __set(string $nomeAtributo, string $valor)
    {
        $this->$nomeAtributo = $valor;
    }
}
