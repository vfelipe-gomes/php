<?php

namespace Vinicius\BancoSelf\Modelo;

class Pessoa
{
    private string $nome;
    private CPF $cpf;
    private Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function validaNomePessoa()
    {
    }

    public function getNomePessoa()
    {
        return $this->nome;
    }

    public function getCpfPessoa()
    {
        return $this->cpf;
    }

    public function getEnderecoPessoa()
    {
        return $this->endereco;
    }
}
