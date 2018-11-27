<?php

require_once __DIR__ . '/Departamento.php';

class DepartamentoFactory
{
    public static function create(string $nome, int $andar = 0): Departamento
    {
        return new Departamento($nome, $andar);
    }
}