<?php

class Departamento
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var integer
     */
    private $andar = 0;

    public function __construct(string $nome, int $andar = 0)
    {
        $this->nome = $nome;
        $this->andar = $andar;
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

    public function setAndar(string $andar)
    {
        $this->andar = $andar;
        return $this;
    }

    public function getAndar()
    {
        return $andar;
    }
}