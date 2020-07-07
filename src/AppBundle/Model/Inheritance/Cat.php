<?php

namespace AppBundle\Model\Inheritance;

class Cat extends Animal
{
    public function makeNoise()
    {
        echo "Prrrrrrrr!";
    }

    public function eat()
    {
        echo "Prrrrrrrr ñam ñam prrrrrr";
    }
}