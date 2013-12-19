<?php

require __DIR__.'/../vendor/autoload.php';

$spartacus = new \GodOfTheArena\Model\Gladiator();
$spartacus->setHP(20000);
$spartacus->setStrength(5000);

$validator = \Symfony\Component\Validator\Validation::createValidator();
$violations = $validator->validateValue($spartacus, new \GodOfTheArena\Constraints\NotATitan());

print_r($violations);
