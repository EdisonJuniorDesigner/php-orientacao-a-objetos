<?php

// autoloader PSR-4
spl_autoload_register(function (string $nomeCompletoDaClasse){
    // Converter isso -> Alura\Banco\Modelo\Endereco
    // Para isso -> src/Modelo/Endereco.php
    // com o autoloader
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});
