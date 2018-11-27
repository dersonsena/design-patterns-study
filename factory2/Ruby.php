<?php

require_once __DIR__ . '/LinguagemInterface.php';

class Ruby implements LinguagemInterface
{
    public function helloWorld(string $message): string
    {
        return 'Programador Ruby dizendo: ' . $message;
    }
}