<?php

namespace AppBundle\Model\InterfaceImplementation;

class Dog extends Animal implements Pet
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