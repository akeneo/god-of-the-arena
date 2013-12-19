<?php

namespace spec\GodOfTheArena\Constraints;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use GodOfTheArena\Constraints\NotATitan;
use Symfony\Component\Validator\ExecutionContextInterface;
use GodOfTheArena\Model\Gladiator;

class NotATitanValidatorSpec extends ObjectBehavior
{
    function let(ExecutionContextInterface $context)
    {
        $this->initialize($context);
    }

    function it_is_a_constraint_validator()
    {
        $this->shouldBeAnInstanceOf('Symfony\Component\Validator\ConstraintValidator');
    }

    function it_does_not_validate_something_else_than_a_gladiator($object, NotATitan $constraint, $context)
    {
        $context->addViolation(Argument::any())->shouldNotBeCalled();

        $this->validate($object, $constraint);
    }

    function it_does_not_validate_gladiator_with_strength_more_than_twice_its_hp(
        Gladiator $crixus, NotATitan $constraint, $context
    ) {
        $context->addViolation($constraint->message)->shouldBeCalled();
        $crixus->getStrength()->willReturn(500);
        $crixus->getHP()->willReturn(100);

        $this->validate($crixus, $constraint);
    }
}
