<?php

require_once __DIR__ . '/DepartamentoFactory.php';
require_once __DIR__ . '/CargoFactory.php';

class FuncionarioFactory
{
    public static function create(string $funcionario, string $sexo, string $cargo, string $depto): Funcionario
    {
        $cargo = CargoFactory::create($cargo);
        $departamento = DepartamentoFactory::create($depto);

        return new Funcionario($funcionario, $sexo, $cargo, $departamento);
    }
}