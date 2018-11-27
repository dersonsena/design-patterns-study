<?php

require_once __DIR__ . '/Cargo.php';

class CargoFactory
{
    public static function create(string $nome, string $abbreviacao = ''): Cargo
    {
        return new Cargo($nome, $abbreviacao);
    }
}