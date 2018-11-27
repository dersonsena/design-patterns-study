<?php

require_once __DIR__ . '/LinguagemInterface.php';

class Java implements LinguagemInterface
{
    public function helloWorld(string $message): string
    {
        return 'Programador JAVA dizendo: ' . $message;
    }
}