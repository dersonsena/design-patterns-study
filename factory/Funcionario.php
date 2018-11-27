<?php

require_once __DIR__ . '/Cargo.php';
require_once __DIR__ . '/Departamento.php';

class Funcionario
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var Cargo
     */
    private $cargo;

    /**
     * @var Departamento
     */
    private $departamento;

    public function __construct(string $nome, string $sexo = 'M', Cargo $cargo, Departamento $departamento)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->cargo = $cargo;
        $this->departamento = $departamento;
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

    public function setSexo(string $sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    public function getSexo()
    {
        return $sexo;
    }

    public function setCargo(string $cargo)
    {
        $this->cargo = $cargo;
        return $this;
    }

    public function getCargo()
    {
        return $cargo;
    }

    public function setDepartamento(string $departamento)
    {
        $this->departamento = $departamento;
        return $this;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }
}