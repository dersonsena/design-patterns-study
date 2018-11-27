<?php

require_once __DIR__ . '/ProgramadorFactory.php';

$programador = ProgramadorFactory::create(ProgramadorFactory::RUBY);
echo $programador->helloWorld('Olá mundo !');

echo '<pre>';
print_r($programador);