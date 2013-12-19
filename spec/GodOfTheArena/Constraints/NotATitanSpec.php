<?php

namespace spec\GodOfTheArena\Constraints;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NotATitanSpec extends ObjectBehavior
{
    function it_is_a_constraint()
    {
        $this->shouldHaveType('Symfony\Component\Validator\Constraint');
    }
}
