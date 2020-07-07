<?php

namespace AppBundle\Model\InterfaceImplementation;

class Cat extends Animal implements Pet
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