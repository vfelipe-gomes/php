<?php

use \Vinicius\BancoSelf\Modelo\Pessoa;
use \Vinicius\BancoSelf\Modelo\CPF;
use \Vinicius\BancoSelf\Modelo\Endereco;

require 'autoload.php';

$pessoa1 = new Pessoa(
    'Vinícius Gomes',
    new CPF('344.783.958-96'),
    new Endereco('Santo André', 'Centro', 'Rua Santo André', '55 - 61D')
);

echo $pessoa1->getNomePessoa() . ' - ' . $pessoa1->getCpfPessoa() . PHP_EOL;
