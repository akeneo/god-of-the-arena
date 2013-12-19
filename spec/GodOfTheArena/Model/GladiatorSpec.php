<?php

namespace spec\GodOfTheArena\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GladiatorSpec extends ObjectBehavior
{
    function it_has_a_name()
    {
        $this->setName('Spartacus');
        $this->getName()->shouldReturn('Spartacus');
    }

    function it_has_some_hp()
    {
        $this->setHP(1000);
        $this->getHP()->shouldReturn(1000);
    }

    function it_has_some_strength()
    {
        $this->setStrength(100);
        $this->getStrength()->shouldReturn(100);
    }

    function it_cannot_have_more_than_9999_hp()
    {
        $this->shouldThrow(new \InvalidArgumentException('It should have less than 9999 hp'))->duringSetHP(10000);
    }
}
