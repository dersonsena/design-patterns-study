<?php

require_once __DIR__ . '/Funcionario.php';
require_once __DIR__ . '/FuncionarioFactory.php';

// Sem Usar a factory
$cargo = new Cargo('Programador PHP', 'PPHP');
$departamento = new Departamento('TI', 2);
$funcionario = new Funcionario('Kilderson Sena', 'M', $cargo, $departamento);

// Usando a factory
$funcionario = FuncionarioFactory::create('Kilderson Sena', 'M', 'Programador PHP', 'TI');

echo "<pre>";
print_r($funcionario);