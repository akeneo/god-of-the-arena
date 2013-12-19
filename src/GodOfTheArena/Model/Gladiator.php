<?php

namespace GodOfTheArena\Model;

class Gladiator
{
    protected $name;
    protected $hp;
    protected $strength;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setHP($hp)
    {
        if ($hp > 9999) {
            throw new \InvalidArgumentException('It should have less than 9999 hp');
        }
        $this->hp = $hp;
    }

    public function getHP()
    {
        return $this->hp;
    }

    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    public function getStrength()
    {
        return $this->strength;
    }
}
