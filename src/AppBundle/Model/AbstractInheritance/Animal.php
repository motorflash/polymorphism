<?php

namespace AppBundle\Model\AbstractInheritance;

// CAN'T BE INSTANTIATED
abstract class Animal
{
    // MUST BE DECLARED IN SUBCLASS
    abstract public function makeNoise();

    public function eat()
    {
        echo "ñam ñam";
    }

    public function sleep()
    {
        echo "zzzzzzz...";
    }

    public function roam()
    {
        echo "Roaming...";
    }

    public function tame()
    {
        // DEFAULT BEHAVIOUR
    }
}