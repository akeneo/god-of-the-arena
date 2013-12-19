<?php

namespace GodOfTheArena\Constraints;

use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Constraint;
use GodOfTheArena\Model\Gladiator;

class NotATitanValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!$value instanceof Gladiator) {
            return;
        }

        if (($value->getStrength() * 2) > $value->getHP()) {
            $this->context->addViolation($constraint->message);
        }
    }
}
