<?php

namespace AppBundle\Model\AbstractInheritance;

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

    public function tame()
    {
        echo "Taming cat...";
    }
}