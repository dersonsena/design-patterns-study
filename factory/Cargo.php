<?php

class Cargo
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $abreviacao = '';

    public function __construct(string $nome, string $abreviacao = '')
    {
        $this->nome = $nome;
        $this->abreviacao = $abreviacao;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNome()
    {
        return $nome;
    }

    public function setAbreviacao(string $abreviacao)
    {
        $this->abreviacao = $abreviacao;
        return $this;
    }

    public function getAbreviacao()
    {
        return $abreviacao;
    }
}