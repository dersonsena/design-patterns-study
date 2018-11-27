<?php

require_once __DIR__ . '/LinguagemInterface.php';

class PHP implements LinguagemInterface
{
    public function helloWorld(string $message): string
    {
        return 'Programador PHP dizendo: ' . $message;
    }
}