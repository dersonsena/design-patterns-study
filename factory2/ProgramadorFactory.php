<?php

require_once __DIR__ . '/LinguagemInterface.php';
require_once __DIR__ . '/PHP.php';
require_once __DIR__ . '/Java.php';
require_once __DIR__ . '/Ruby.php';

class ProgramadorFactory
{
    const PHP = 1;
    const JAVA = 2;
    const RUBY = 3;

    public static function create(int $language): LinguagemInterface
    {
        switch ($language) {
            case static::PHP:
                return new PHP;
            case static::JAVA:
                return new Java;
            case static::RUBY:
                return new Ruby;
            default:
                throw new Exception('Linguagem de programação não encontrada.');
        }
    }
}