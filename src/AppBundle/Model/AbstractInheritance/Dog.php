<?php

namespace AppBundle\Model\AbstractInheritance;

class Dog extends Animal
{
    public function makeNoise()
    {
        echo "Guau guau!!";
    }

    public function eat()
    {
        echo "Guau ñam ñam guau!";
    }

    public function tame()
    {
        echo "Taming dog...";
    }
}